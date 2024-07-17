// =========================================================Log

console.log('ładoanie JS_2...');

window.addEventListener('load', function () {

    // =========================================================Add New Item

    let grid = document.getElementById("grid");
    let addBtn = document.getElementById("add");
    let number = 0;

    const addNewItem = () => {
        const item = document.createElement("div");
        item.innerHTML = `
            <ion-icon class="del" name="trash-outline"></ion-icon>
            <label for="pojęcie_${number}">
                <input id="pojęcie_${number}" type="text">
                Pojęcie
            </label>
            <label for="definicja_${number}">
                <input id="definicja_${number}" type="text">
                Definicja
            </label>`;
        item.classList.add('-item');
        grid.appendChild(item);
        number++;

        const delBtns = document.getElementsByClassName('del');
        for (let i = 0; i < delBtns.length; i++) {
            delBtns[i].addEventListener("click", delItem);
        }
    }

    addBtn.addEventListener("click", addNewItem);

    // =========================================================Del New Item

    const delItem = (event) => {
        var div = event.target.parentElement;
        div.remove();
    }

})

// =========================================================Log

console.log('pomyślnie załadowano JS_2! :)');