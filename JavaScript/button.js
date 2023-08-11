let hamburguer = document.querySelector(".hamburguer");
let navMenu = document.querySelector("#menu");

hamburguer.addEventListener("click", () => {
    hamburguer.classList.toggle('active');
    navMenu.classList.toggle('active');
})

