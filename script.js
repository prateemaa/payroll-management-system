const navbarMenu = document.querySelector(".navbar .links");
const menuBtn = document.querySelector(".menu-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = document.querySelector(".form-popup .close-btn");
const loginregisterlink = document.querySelectorAll(".form-box .bottom-link a");

//show mobile menu
menuBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});
//hide mobile menu
hideMenuBtn.addEventListener("click", () => menuBtn.click());
//show form popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

//Hide form popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

loginregisterlink.forEach(link => {
    link.addEventListener("click", (e) => {
       e.preventDefault();
       formPopup.classList[link.id === "register-link" ? 'add': 'remove'] ("show-register");
    });
});