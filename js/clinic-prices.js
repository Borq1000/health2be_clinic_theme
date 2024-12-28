jQuery(document).ready(function ($) {
    // Инициализация существующих данных
    var existingPrices = window.clinicPrices || [];
    if (existingPrices.length > 0) {
        existingPrices.forEach(function (group) {
            addGroup(group);
        });
    }


    // Добавление новой группы
    $(document).on('click', '.add-group', function () {
        addGroup();
    });

    // Функция добавления группы
    function addGroup(data) {
        var groupIndex = $('.price-group').length;
        var template = `
            <div class="price-group" data-group-index="${groupIndex}">
                <div class="group-header">
                    <input type="text" 
                           name="clinic_prices[${groupIndex}][category]" 
                           class="category-input widefat"
                           value="${data ? (data.category || '') : ''}"
                           placeholder="Название категории (необязательно)">
                    <button type="button" class="remove-group" title="Удалить группу">
                        <span class="dashicons dashicons-no"></span>
                    </button>
                </div>
                <table class="widefat services-table">
                    <thead>
                        <tr>
                            <th>Наименование услуги</th>
                            <th>Длительность</th>
                            <th>Стоимость</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <button type="button" class="button add-service">Добавить услугу</button>
            </div>
        `;
        $('#groups-container').append(template);

        // Добавляем существующие услуги, если они есть
        if (data && data.services) {
            data.services.forEach(function (service) {
                addService($('#groups-container .price-group').last(), service);
            });
        }
    }

    // Добавление новой услуги
    $(document).on('click', '.add-service', function () {
        var $group = $(this).closest('.price-group');
        addService($group);
    });

    // Функция добавления услуги
    function addService($group, data) {
        var groupIndex = $group.data('group-index');
        var serviceIndex = $group.find('.services-table tbody tr').length;

        var template = `
            <tr>
                <td>
                    <input type="text" 
                           name="clinic_prices[${groupIndex}][services][${serviceIndex}][name]" 
                           value="${data ? (data.name || '') : ''}"
                           placeholder="Наименование услуги"
                           class="widefat">
                </td>
                <td>
                    <input type="text" 
                           name="clinic_prices[${groupIndex}][services][${serviceIndex}][duration]" 
                           value="${data ? (data.duration || '') : ''}"
                           placeholder="Длительность"
                           class="widefat">
                </td>
                <td>
                    <input type="text" 
                           name="clinic_prices[${groupIndex}][services][${serviceIndex}][price]" 
                           value="${data ? (data.price || '') : ''}"
                           placeholder="Стоимость"
                           class="widefat">
                </td>
                <td>
                    <button type="button" class="remove-service" title="Удалить услугу">
                        <span class="dashicons dashicons-no"></span>
                    </button>
                </td>
            </tr>
        `;
        $group.find('.services-table tbody').append(template);
    }

    // Удаление группы
    $(document).on('click', '.remove-group', function () {
        var $group = $(this).closest('.price-group');
        if (confirm('Вы уверены, что хотите удалить эту группу и все её услуги?')) {
            $group.remove();
            reindexGroups();
        }
    });

    // Удаление услуги
    $(document).on('click', '.remove-service', function () {
        var $row = $(this).closest('tr');
        var $group = $(this).closest('.price-group');
        $row.remove();
        reindexServices($group);
    });

    // Переиндексация всех групп
    function reindexGroups() {
        $('.price-group').each(function (groupIndex) {
            $(this).attr('data-group-index', groupIndex);
            var $group = $(this);

            // Обновляем индекс категории
            $group.find('.category-input').attr('name', `clinic_prices[${groupIndex}][category]`);

            // Обновляем индексы услуг
            reindexServices($group);
        });
    }

    // Переиндексация услуг в группе
    function reindexServices($group) {
        var groupIndex = $group.data('group-index');
        $group.find('.services-table tbody tr').each(function (serviceIndex) {
            $(this).find('input').each(function () {
                var name = $(this).attr('name');
                name = name.replace(/clinic_prices\[\d+\]/, `clinic_prices[${groupIndex}]`);
                name = name.replace(/\[services\]\[\d+\]/, `[services][${serviceIndex}]`);
                $(this).attr('name', name);
            });
        });
    }
});
