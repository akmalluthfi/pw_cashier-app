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
