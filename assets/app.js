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

// toggle active sur carrousel

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

// fonction pour vérifier le formulaire de contact
/**
 * @returns {boolean} 
 * @description Recuperate all fields from form as variables and define a condition and an error message to push.
 */
function validateFormContact() { 
    // récupération des forms
    let name = document.querySelector("#name").value; 
    let subject = document.querySelector("#subject").value; 
    let email = document.querySelector("#email").value; 
    let message = document.querySelector("#message").value; 
    let error_message = document.querySelector("#error_message"); 
    error_message.style.padding = "10px"; 
  
    let errors = []; 

    // vérification nom
    if (name.length < 3) { 
        errors.push("Veuillez entrer un nom valide.");
    } 
    // vérification du mail
    if (email.indexOf("@") === -1 || email.length < 6) { 
        errors.push("Veuillez entrer une adresse mail valide.");
    } 
    // vérification sujet
    if (subject.length < 5) { 
        errors.push("Veuillez entrer un sujet valide.");
    }
    // vérification du message
    if (message.length <= 30) { 
        errors.push("Veuillez écrire un message de plus de 30 caractères.");
    } 
    // envoi du message en fonction des erreurs
    if (errors.length > 0) { 
        error_message.textContent = errors.join(" "); 
        return false;
    } 
    else { 
        alert( 
            "Votre message a été envoyé !"); 
        return true;
    }
}
