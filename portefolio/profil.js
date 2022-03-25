"use strict";

window.onload = init;

function init() {
    // activer l'infobulle
    // let x = document.getElementById('voirMentions');
    new bootstrap.Tooltip(voirMentions, {placement : "bottom"});
    // activation des infobulles de la page
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(element => new bootstrap.Tooltip(element, {html : true} ));
    new bootstrap.Popover(aide);
}






