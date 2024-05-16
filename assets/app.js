// assets/app.js
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// toggle nav sur hamburger
let nav = document.querySelector(".top-nav");
let hamburger = document.querySelector("#hamburger");
hamburger.addEventListener("click", () => {
    nav.classList.toggle("open");
})

// toggle nav sur liens
let liens = document.querySelectorAll(".menu-principal-item");
liens.forEach((liens) => {
    liens.addEventListener("click", () => {
        nav.classList.remove("open");
    })
})

// toogle active sur carousel

let prevButton = document.getElementById("prev");
let nextButton = document.getElementById("next");
let slidesContainer = document.querySelector(".carousel-gauche-contenu")
let slide = document.querySelector(".carousel-gauche-element");

nextButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft += slideWidth;
  });
  
  prevButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft -= slideWidth;
  });