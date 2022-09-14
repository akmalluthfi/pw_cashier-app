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

let queryTime;
function query(element) {
    if (queryTime) {
        clearTimeout(queryTime);
    }

    queryTime = setTimeout(() => {
        if (element.value.length === 0) return;
        search(element.value);
    }, 300);
}

async function search(value) {
    const response = await fetch(`/api/items?k=${value}`);
    const result = await response.json();

    // change url param
    window.history.pushState({ id: "100" }, "Tes", "?k=" + value);

    const tBody = document.getElementById("items-table-body");

    let trItems = "";
    let i = 1;
    result.data.forEach((item) => {
        trItems += printTr(item, i);
        i++;
    });

    tBody.innerHTML = trItems;
}

function printTr(item, i) {
    const itemEdit = feather.icons.edit.toSvg({ class: "align-text-bottom" });
    const itemEye = feather.icons.eye.toSvg({ class: "align-text-bottom" });
    const itemTrash = feather.icons["trash-2"].toSvg({
        class: "align-text-bottom",
    });

    return `
        <tr>
            <th scope="row">${i}</th>
            <td>${item.name}</td>
            <td>${item.category}</td>
            <td>${item.brand}</td>
            <td>${item.purchase_price}</td>
            <td>${item.selling_price}</td>
            <td>${item.stock}</td>
            <td>
                <div class="d-flex flex-nowrap">
                    <a href="/items/${item.id}" class="btn badge text-bg-primary me-2">${itemEye}</a>
                    <a href="/items/${item.id}/edit" class="btn badge text-bg-warning me-2">${itemEdit}</a>
                    <form action="/items/${item.id}" method="POST" class="d-inline" onsubmit="return confirm('Apakah anda yakin mau menghapus barang?')">
                        <button class="btn badge text-bg-danger">${itemTrash}</button>
                    </form>
                </div>
            </td>
        </tr>
    `;
}

const searchInput = document.getElementById("search");

searchInput.addEventListener("input", async function (e) {
    // console.log(this.value.length == 0);
    const value = this.value;

    if (value.length == 0) {
        console.log(window.history.state);
        window.history.pushState(
            { id: "100" },
            "Tes",
            window.location.pathname
        );
        return;
    }

    const response = await fetch(`/api/items?k=${value}`);
    const result = await response.json();

    // change url param
    window.history.pushState({ id: "100" }, "Tes", "?k=" + value);

    const tBody = document.getElementById("items-table-body");

    let trItems = "";
    let i = 1;
    result.data.forEach((item) => {
        trItems += printTr(item, i);
        i++;
    });

    tBody.innerHTML = trItems;
});
