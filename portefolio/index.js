"use strict";

window.onload = init;

function init() {
    // activer l'infobulle
    // let x = document.getElementById('voirMentions');
    new bootstrap.Tooltip(voirMentions, {placement : "bottom"});

    // chargement du composant particles
    particlesJS.load('home','ajax/particules.json');
}
