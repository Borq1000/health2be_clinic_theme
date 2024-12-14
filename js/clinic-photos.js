jQuery(document).ready(function ($) {
    $('#add-clinic-photo').on('click', function (e) {
        e.preventDefault();
        var custom_uploader = wp.media({
            title: 'Выберите фотографии',
            button: {
                text: 'Добавить'
            },
            multiple: true
        }).on('select', function () {
            var attachments = custom_uploader.state().get('selection').toJSON();
            attachments.forEach(function (attachment) {
                var html = `
                    <div class="clinic-photo-item" style="display:inline-block; margin-right:10px; text-align:center;">
                        <img src="${attachment.url}" style="width:100px; height:auto; display:block; margin-bottom:5px;">
                        <input type="hidden" name="clinic_photos[]" value="${attachment.id}">
                        <button type="button" class="remove-clinic-photo button">Удалить</button>
                    </div>
                `;
                $('#clinic-photos-container').append(html);
            });
        }).open();
    });

    $(document).on('click', '.remove-clinic-photo', function () {
        $(this).closest('.clinic-photo-item').remove();
    });
});
