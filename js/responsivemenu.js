function toggleNav() {
    let menuDiv = document.getElementById("primary-menu");
    let servicesDiv = document.getElementById("top-services-list");
    if (menuDiv.style.display != "block") {
        menuDiv.style.display = "block";
        servicesDiv.style.display = "none";
    } else {
        menuDiv.style.display = "none";
    }
}

function toggleServices() {
    console.log("entro");
    let menuDiv = document.getElementById("primary-menu");
    let servicesDiv = document.getElementById("top-services-list");
    if (servicesDiv.style.display != "block") {
        servicesDiv.style.display = "block";
        menuDiv.style.display = "none";
    } else {
        servicesDiv.style.display = "none";
    }
}    

window.onload = function() {
    document.getElementById("main-menu-toggle").onclick = toggleNav;
    document.getElementById("top-menu-servicios").onclick = toggleServices;
}

var win = window,
docEl = document.documentElement,
logo = document.getElementById('main-hidden');

win.onscroll = function(){
var sTop = (this.pageYOffset || docEl.scrollTop)  - (docEl.clientTop || 0);
logo.style.display =  sTop > 200 ? "block":"none" ;
};
