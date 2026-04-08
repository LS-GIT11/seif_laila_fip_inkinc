// #menu make it toggle when click on it
const menu = document.querySelector("#menu");
const nav = document.querySelector("nav");

menu.addEventListener("click", () => {
    nav.classList.toggle("active");
})  
