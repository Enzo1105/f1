"use strict";

window.onload = init;

function init() {
    // activation de l'infobulle sur le pied de page
    new bootstrap.Tooltip (voirMentions, { placement : 'top'})

    // chargement des données
   

}

// Récupération des données et affichage selon la taille de l'écran
function afficher(data) {
    if (document.body.clientWidth > 1200 ) {
        afficherTimeLine(data);
    } else {
        afficherCarte(data);
    }

}

// Afficher les étapes du parcours contenu dans la variable data sous la forme d'une timeline
function afficherTimeLine(data) {

    // générer  <ul class="timeline animate__fadeInDown animate__animated">
    let ul = document.createElement('ul');
    ul.classList.add("timeline",  "animate__fadeInDown",  "animate__animated");

    // Parcourir chaque enregistrement contenu dans le tableau d'objet data
    let n = 1;
    for (const etape of data) {
        // génération de la balise li
        let li = document.createElement('li');
        // avec de la class  timeline-inverted une fois sur 2
        if (n % 2 === 0) {
            li.classList.add('timeline-inverted')
        }
        // Génération de la balise : <div class="timeline-badge">2019</div>
        let div = document.createElement('div');
        div.classList.add("timeline-badge");
        div.innerText = etape.periode;

        // ajout de la balise div dans la balise li
        li.appendChild(div);
        // Génération de la balise : <div class="timeline-panel animate__fadeInLeft animate__animated">
        div = document.createElement('div');
        div.classList.add("timeline-panel", "animate__fadeInLeft", "animate__animated");

        // Génération de la balise <div class="timeline-title">titre</div>
        let divDiv= document.createElement('div');
        divDiv.classList.add("timeline-title");
        divDiv.innerText = etape.titre;

        // ajout de la balise divDiv dans la balise div
        div.appendChild(divDiv);

        // Génération de la balise p
        let p= document.createElement('p');

        // Génération de la balise <i class="fa-solid fa-house p-1">
        let i= document.createElement('i');
        i.classList.add("fa-solid", "fa-house",  "p-1");

        // ajout de la balise i dans la balise p
        p.appendChild(i);

         // ajout du lieu dans la balise p
        let txt = document.createTextNode(etape.lieu);
        p.appendChild(txt);

        // ajout de la balise p dans la balise div
        div.appendChild(p);

        // ajout du détail dans la balise div
        txt = document.createTextNode(etape.detail);
        div.appendChild(txt);

        // ajout de la balise div dans la balise li
        li.append(div);
        // ajout d ela balise li dans la balise ul
        ul.append(li);
        n++;
    }
    // ajout de la balise ul dans le conteneur id='parcours'
    parcours.appendChild(ul);
    parcours.classList.add("m-2",  "styleCadre");
}

// Afficher les étapes du parcours contenu dans la variable data sous la forme de carte bootstrap
function afficherCarte(data) {

    // Parcourir chaque enregistrement contenu dans le tableau d'objet data
    for (const etape of data) {

        // génération de la balise  <div class="card m-3 animate__fadeInDown animate__animated">
        let div = document.createElement('div');
        div.classList.add("card", "m-3", "animate__fadeInDown", "animate__animated");

        // génération de la balise : <div class="card-header timeline-title styleCadre">titre</div>
        let divDiv = document.createElement('div');
        divDiv.classList.add("card-header", "timeline-title", "styleCadre");
        divDiv.innerText = etape.titre;

        // ajout de la balise divDiv dans la balise div
        div.appendChild(divDiv);

        // génération de la balise : <div class="card-body styleCadre">
        divDiv = document.createElement('div');
        divDiv.classList.add("card-body", "styleCadre");

        // Génération de la balise p
        let p= document.createElement('p');

        // Génération de la balise <i class="fa-solid fa-house p-1">
        let i = document.createElement('i');
        i.classList.add("fa-solid", "fa-house", "p-1");

        // ajout de la balise i dans la balise p
        p.appendChild(i);

        // ajout du lieu dans la balise p
        let txt = document.createTextNode(etape.lieu);
        p.appendChild(txt);

        // ajout de la balise p dans la balise divDiv
        divDiv.appendChild(p);

        // ajout du détail dans la balise divDiv
        txt = document.createTextNode(etape.detail);
        divDiv.appendChild(txt);

        // ajout de la balise divDiv dans la balise div
        div.appendChild(divDiv);

        // ajout de la balise div "<div class="card m-3 animate__fadeInDown animate__animated">" dans le conteneur id='parcours'
        parcours.appendChild(div);
    }


}