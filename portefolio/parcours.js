"use strict";

window.onload = init;

function init() {
    // activation de l'infobulle sur le pied de page
    new bootstrap.Tooltip (voirMentions, { placement : 'top'})

	// Sélection du conteneur à afficher selon la taille de l'écran 
   if (document.body.clientWidth > 1200) {
       chronologie.style.display = 'block';

   }else {
       liste.style.display = 'block';
   }
}
