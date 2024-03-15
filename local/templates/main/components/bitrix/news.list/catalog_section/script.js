document.addEventListener("DOMContentLoaded", function () {
  var form = document.querySelector(".catalog-hero__activity");
  document
    .querySelector(".catalog-hero__reset")
    .addEventListener("click", function () {
      // Находим форму по названию класса

      const selectFields = document.querySelectorAll(".select__select");
      const checkbox = document.querySelector('input[name="top"]');
      checkbox.checked = false;

      selectFields.forEach((selectField) => {
        // Ваш код для обработки каждого поля select здесь
        console.log(selectField.value); // Пример: выведет каждое найденное поле select
        selectField.selectedIndex = 0;
      });
      form.submit();
    });
  //
  const checkbox = document.querySelector('input[name="top"]');
  console.log(checkbox);
  checkbox.addEventListener("change", function () {
    form.submit();
  });
  ///////////
  const targetNode = document.querySelector(".select__select");
  const targetNodeFat = document.querySelector('select[name="fat"]');
  const targetNodeBrand = document.querySelector('select[name="brand"]');
  const targetNodeSort = document.querySelector('select[name="sort"]');
  let initialSelected = "unset";
  let initialSelectedBrand = "unset";
  let initialSelectedSort = "unset";
  const config = { attributes: true };

  const observer = new MutationObserver((mutationsList, observer) => {
    for (let mutation of mutationsList) {
      if (mutation.attributeName === "data-select2-id") {
        const optionValue = getValueOfSelectedOption(
          mutation.target.querySelectorAll("option")
        );
        console.log(`Fat value is: ${optionValue}`);
        if (initialSelected === "unset") {
          initialSelected = optionValue;
        } else if (initialSelected != optionValue) {
          observer.disconnect();
          form.submit();
        }
      }
    }
  });
  const observerBrand = new MutationObserver((mutationsList, observer) => {
    for (let mutation of mutationsList) {
      if (mutation.attributeName === "data-select2-id") {
        const optionValue = getValueOfSelectedOption(
          mutation.target.querySelectorAll("option")
        );
        console.log(`Brand value is: ${optionValue}`);
        if (initialSelectedBrand === "unset") {
          initialSelectedBrand = optionValue;
        } else if (initialSelectedBrand != optionValue) {
          observer.disconnect();
          form.submit();
        }
      }
    }
  });
  const observerSort = new MutationObserver((mutationsList, observer) => {
    for (let mutation of mutationsList) {
      if (mutation.attributeName === "data-select2-id") {
        const optionValue = getValueOfSelectedOption(
          mutation.target.querySelectorAll("option")
        );
        console.log(`Sort value is: ${optionValue}`);
        if (initialSelectedSort === "unset") {
          initialSelectedSort = optionValue;
        } else if (initialSelectedSort != optionValue) {
          var xhr = new XMLHttpRequest();

          // Настройка запроса
          xhr.open(
            "POST",
            "http://192.168.50.93/local/templates/main/include/ajax/sort.php",
            true
          );

          // Устанавливаем заголовок Content-Type
          xhr.setRequestHeader("Content-Type", "application/json");
          xhr.onload = function () {
            if (xhr.status === 200) {
              // Обработка успешного ответа от сервера
              console.log(
                "Строка успешно отправлена и получен ответ:",
                xhr.responseText
              );
            } else {
              // Обработка ошибки
              console.error(
                "Произошла ошибка при отправке запроса:",
                xhr.status
              );
            }
          };

          xhr.onerror = function () {
            // Обработка ошибки
            console.error("Произошла ошибка при отправке запроса.");
          };

          // Определяем функцию, которая будет вызвана после получения ответа от сервера
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // Обработка ответа от сервера
              console.log(xhr.responseText);
            }
          };

          // Получаем данные из формы
          var jsonData;

          jsonData = optionValue;

          // Преобразуем объект данных в строку JSON
          var jsonString = JSON.stringify(jsonData);
          console.log("Отправляемая JSON-строка:", jsonString);
          // Отправка запроса на сервер
          xhr.send(jsonString);
          form.submit();
        }
      }
    }
  });

  observer.observe(targetNodeFat, config);
  observerBrand.observe(targetNodeBrand, config);
  observerSort.observe(targetNodeSort, config);

  function getValueOfSelectedOption(options) {
    for (const option of options) {
      if (option.hasAttribute("data-select2-id")) {
        return `${option.value}`;
      }
    }
    return "";
  }
});
