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
        servicesDiv.style.marginTop = "-35px";
        menuDiv.style.display = "none";
    } else {
        servicesDiv.style.display = "none";
    }
}    

window.onload = function() {
    document.getElementById("main-menu-toggle").onclick = toggleNav;
    document.getElementById("top-menu-servicios").onclick = toggleServices;
}
