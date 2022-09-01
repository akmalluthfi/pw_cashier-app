(() => {
    "use strict";
    feather.replace({ "aria-hidden": "true" });
})();

function addInputValue(oldCategoryName, categoryId) {
    const editCategoryModal = document.getElementById("editCategoryModal");
    const formEditCategory = editCategoryModal.querySelector("form");
    formEditCategory.setAttribute("action", `/categories/${categoryId}`);
    const input = formEditCategory.querySelector("input#name");
    input.value = oldCategoryName;
}

function showDate() {
    console.log("Yas");
    const dateEl = document.getElementById("date");
    console.log(dateEl);
    dateEl.innerHTML = new Date().toLocaleDateString();
}
