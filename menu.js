var isShown;

var menu = document.getElementById("menu");

if (window.innerWidth < 600) {
    isShown = false;
    HideMenu();
}

function Alternate() {
    if (isShown) {
        HideMenu();
    } else {
        ShowMenu();
    }
}

function HideMenu() {
    menu.className = "hidden";
    isShown = false;
}

function ShowMenu() {
    menu.className = "menu";
    isShown = true;
}