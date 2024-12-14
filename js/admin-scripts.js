jQuery(document).ready(function ($) {
    $('body').on('click', '.upload_image_button', function (e) {
        e.preventDefault();
        var button = $(this);
        var custom_uploader = wp.media({
            title: 'Выберите изображение',
            button: { text: 'Выбрать' },
            multiple: false,
        }).on('select', function () {
            var attachment = custom_uploader.state().get('selection').first().toJSON();
            button.prev('input').val(attachment.url);
            button.prevAll('img').attr('src', attachment.url).show();
        }).open();
    });
});
