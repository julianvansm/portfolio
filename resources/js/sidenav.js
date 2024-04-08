
window.openNav = function () {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementById("fullpageblur").classList.toggle('backgroundblur');
    document.getElementById("navblurclose").classList.toggle('navblurclose');
    document.getElementById("mySidenav").classList.toggle('sidenavborder');
}

window.closeNav= function () {
    document.getElementById("mySidenav").style.left = "-260px";
    document.getElementById("fullpageblur").classList.remove('backgroundblur');
    document.getElementById("navblurclose").classList.remove('navblurclose');
    document.getElementById("mySidenav").classList.remove('sidenavborder');
}
