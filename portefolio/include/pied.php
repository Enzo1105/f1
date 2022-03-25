<?php
include 'class/class.datefr.php';
?>

<div class="d-flex justify-content-between m-3 ">
    <span class="masquer">
    <?= ucwords(DateFr::getFromDateMysql(date('Y-m-d'))->toFormatLong()); ?>
    </span>

    © Guy Verghote

    <a id="voirMentions"
            href="#"
       data-bs-toggle="modal"
       data-bs-target="#mentions"
       data-bs-placement="left"
       title ="Voir les conditions d'utilisation"
    >
        Mentions légales
    </a>
</div>


<!-- fenêtre nodal pour les conditions d'utilisation -->
<div class=" modal fade" id="mentions" data-bs-backdrop="true" data-bs-keyboard="true"
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header styleCadre">
                <h4 class="modal-title" id="myModalLabel">Mentions légales</h4>
                <button type="button"  class="close styleCadre"  style="background-color: #3f903f" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body styleCadre">
                <article>
                    ARTICLE 1 : L’éditeur
                    <br>
                    L’édition et la direction de la publication du site https://.....fr/index.php est assurée par Prenom
                    Nom, domiciliée Adresse, dont le numéro de téléphone est 06 06 06 06 06, et l'adresse e-mail
                    prenom.nom@domaine.fr.
                </article>
                <article>
                    <p>
                        ARTICLE 2 : L’hébergeur
                    </p>
                    <p>
                        L'hébergeur du site https://... est la Société IONOS, dont le siège social est situé au 7 Pl. de
                        la Gare, 57200 Sarreguemines , avec le numéro de téléphone : 0970 808 911.
                    </p>
                </article>
                <article>
                    <p>
                        ARTICLE 3 : Accès au site
                    </p>
                    <p>
                        Le site est accessible par tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
                        programmée ou non et pouvant découlant d’une nécessité de maintenance.
                        En cas de modification, interruption ou suspension des services le site https://... ne saurait
                        être tenu responsable.
                    </p>
                </article>
                <article>
                    <p>
                        ARTICLE 4 : Collecte des données
                    </p>
                    <p>
                        Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL)
                        dans la mesure où il ne collecte aucune donnée concernant les utilisateurs.
                    </p>
                </article>
                <article>
                    <p>
                        ARTICLE 5 : Cookies
                    </p>
                    <p>
                        L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer
                        automatiquement sur son logiciel de navigation.
                        En naviguant sur le site, il les accepte.
                        Un cookie est un élément qui ne permet pas d’identifier l’Utilisateur mais sert à enregistrer
                        des informations relatives à la navigation de celui-ci sur le site Internet. L’Utilisateur
                        pourra désactiver ce cookie par l’intermédiaire des paramètres figurant au sein de son logiciel
                        de navigation.
                    </p>
                </article>
                <article>
                    <p>
                        ARTICLE 6 : Propriété intellectuelle
                    </p>
                    <p>
                        Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie
                        du site https://courses80.fr/index.php, sans autorisation de l’Editeur est prohibée et pourra
                        entraînée des actions et poursuites judiciaires telles que notamment prévues par le Code de la
                        propriété intellectuelle et le Code civil.
                    </p>
                </article>
            </div>
        </div>
    </div>
</div>