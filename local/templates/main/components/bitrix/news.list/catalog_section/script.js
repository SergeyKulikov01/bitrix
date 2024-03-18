document.addEventListener("DOMContentLoaded", function () {
  const checkbox = document.querySelector('input[name="top"]');
  const form = document.querySelector(".catalog-hero__activity");
  const selectFields = document.querySelectorAll(".select__select");
  document
    .querySelector(".catalog-hero__reset")
    .addEventListener("click", function () {
      checkbox.checked = false;
      selectFields.forEach((selectField) => {
        console.log(selectField.value);
        selectField.selectedIndex = 0;
      });
      form.submit();
    });

  checkbox.addEventListener("change", function () {
    form.submit();
  });

  for (let selectField of selectFields) {
    // массив для фильтрации брендов и и жирности
    const targetNode = selectField;
    let initialSelected = "unset";
    const config = { attributes: true };

    const observer = new MutationObserver((mutationsList, observer) => {
      for (let mutation of mutationsList) {
        if (mutation.attributeName === "data-select2-id") {
          const optionValue = getValueOfSelectedOption(
            mutation.target.querySelectorAll("option")
          );
          if (initialSelected === "unset") {
            initialSelected = optionValue;
          } else if (initialSelected != optionValue) {
            observer.disconnect();
            form.submit();
          }
        }
      }
    });
    observer.observe(targetNode, config);
    function getValueOfSelectedOption(options) {
      for (const option of options) {
        if (option.hasAttribute("data-select2-id")) {
          return option.value;
        }
      }
      return "";
    }
  }

  const targetNodeSort = document.querySelector('select[name="sort"]');
  let initialSelectedSort = "unset";
  const config = { attributes: true };

  const observerSort = new MutationObserver((mutationsList, observer) => {
    for (let mutation of mutationsList) {
      if (mutation.attributeName === "data-select2-id") {
        const optionValue = getValueOfSelectedOption(
          mutation.target.querySelectorAll("option")
        );
        if (initialSelectedSort === "unset") {
          initialSelectedSort = optionValue;
        } else if (initialSelectedSort != optionValue) {
          var xhr = new XMLHttpRequest();
          xhr.open(
            "POST",
            "http://192.168.50.93/local/templates/main/include/ajax/sort.php",
            false
          );
          xhr.setRequestHeader("Content-Type", "application/json");
          var jsonData = optionValue;
          var jsonString = JSON.stringify(jsonData); // создание JSON строки из jsonData
          xhr.send(jsonString);
          form.submit();
        }
      }
    }
  });
  observerSort.observe(targetNodeSort, config);
});
