// ======================================================================================================== Log

console.log('ładoanie JS_1...')

window.addEventListener('load', function () {

    // =========================================================================================== NavOpenClose

    const OpenClose = () => {
        let root = document.querySelector(":root");
        let nav = document.getElementById('nav');
        let icon = document.getElementById('navOpenClose');
        let display = nav.style.display;

        if (display == 'none') {
            root.style.setProperty("--navActive", "400px");
            nav.style.display = 'flex';
            icon.name = "close-outline"
        } else {
            root.style.setProperty("--navActive", "0");
            nav.style.display = 'none';
            icon.name = "menu-outline"
        }
        console.log('działa :)');
    };

    const btn = document.getElementById("navOpenClose");

    if (btn) {
        btn.addEventListener("click", OpenClose);
    } else {
        console.log('nie działa :(');
    }


    // ================================================================================================== Timer

    var countUpDate = new Date().getTime();

    var x = setInterval(function () {

        var now = new Date().getTime();
        var distance = now - countUpDate;

        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        if (hours < 10) hours = "0" + hours

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        if (minutes < 10) minutes = "0" + minutes

        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        if (seconds < 10) seconds = "0" + seconds

        document.getElementById("timeCounterInner").innerHTML = hours + ":" + minutes + ":" + seconds;
    }, 1000);

    // ============================================================================================== Show Page

    var styleElem = document.head.appendChild(document.createElement("style"));
    styleElem.innerHTML = "body::before {z-index: -1; opacity: 0;}";
})
// ======================================================================================================== Log
console.log('pomyślnie załadowano JS_1! :)')