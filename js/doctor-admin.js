jQuery(document).ready(function ($) {
  // Медиа загрузчик для фотографий
  var mediaUploader;

  $("#add-doctor-photo").on("click", function (e) {
    e.preventDefault();

    // Проверяем количество уже загруженных фотографий
    if ($(".doctor-photo-item").length >= 4) {
      alert("Максимальное количество дополнительных фотографий - 4");
      return;
    }

    // Если загрузчик уже инициализирован
    if (mediaUploader) {
      mediaUploader.open();
      return;
    }

    // Создаем новый загрузчик
    mediaUploader = wp.media({
      title: "Выберите фотографию",
      button: {
        text: "Использовать это фото",
      },
      multiple: false,
    });

    // Когда фото выбрано
    mediaUploader.on("select", function () {
      var attachment = mediaUploader.state().get("selection").first().toJSON();
      var photoHtml =
        '<div class="doctor-photo-item">' +
        '<img src="' +
        attachment.url +
        '" width="100">' +
        '<input type="hidden" name="doctor_photos[]" value="' +
        attachment.id +
        '">' +
        '<button type="button" class="remove-photo button">Удалить</button>' +
        "</div>";
      $("#doctor-photos-container").append(photoHtml);
    });

    mediaUploader.open();
  });

  // Удаление фотографий
  $(document).on("click", ".remove-photo", function () {
    $(this).parent(".doctor-photo-item").remove();
  });
});
