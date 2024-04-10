import './bootstrap';

window.onbeforeunload = function (e){
    localStorage.setItem('scrollpos', window.scrollY);
};
document.addEventListener("DOMContentLoaded", function (event) {
    var scrollpos = localStorage.getItem('scrollpos');
    if (scrollpos) {window.scrollTo({
        top: scrollpos,
        left: 0,
        behavior: 'auto'
    });}
    // (documentElement = html element)
    document.documentElement.style.scrollBehavior = 'smooth';
});
