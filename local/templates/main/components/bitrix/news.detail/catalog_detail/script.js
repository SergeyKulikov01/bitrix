document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("[data-form='catalog-detail']");
  const send_btn = document.querySelector("[data-send]");
  const form_inputs = document.querySelectorAll("[data-input]");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Предотвращаем отправку формы по умолчанию

    const formData = new FormData();

    // Добавляем поля из формы в объект FormData
    formData.append(
      "prod_link",
      form.querySelector('input[name="prod_link"]').value
    );
    formData.append(
      "session",
      form.querySelector('input[name="sessid"]').value
    );
    formData.append(
      "prod_name",
      form.querySelector('input[name="prod_name"]').value
    );
    formData.append(
      "name",
      form.querySelector('input[name="firstname"]').value
    );
    formData.append("phone", form.querySelector('input[name="phone"]').value);
    formData.append("email", form.querySelector('input[name="email"]').value);
    formData.append(
      "comment",
      form.querySelector('textarea[name="comment"]').value
    );

    const formObject = {};

    for (const [name, value] of formData) {
      //преобразование в обычный js объект
      formObject[name] = value;
    }

    //console.log(formObject);
    var jsonData = JSON.stringify(formObject);
    BX.ajax({
      url: "/local/templates/main/include/ajax/reqest.php",
      method: "POST",
      dataType: "json",
      data: jsonData,
      processData: false, // обработка
      preparePost: false, // предварительная обработка
      async: false,

      onsuccess: function (response) {
        console.log(response);
        console.log(typeof response);
        let data = JSON.parse(response);
        console.log(data.mess);
        if (data.status === "error") {
          var element_title = document.querySelector("[data-error_title]");
          var element_text = document.querySelector("[data-error_text]");
          element_title.innerHTML = "Ошибка :(";
          element_text.innerHTML = "Обновите страницу или попробуйте попозже";
        }
      },

      onfailure: function (error) {
        console.log("Ошибка отправки запроса");
      },
    });
  });
});
