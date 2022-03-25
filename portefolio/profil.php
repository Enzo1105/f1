<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio de Pierre Legrand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="icone.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <script src="profil.js"></script>

</head>
<body>
<div class="d-flex flex-column h-100">
    <header>
        <?php
        require 'include/menu.php';
        ?>
    </header>
    <main class="flex-grow-1">
        <div class="row">
            <div class="col-lg-2 d-none d-lg-block p-2 text-center">
                <img src="img/photo.png" class="img-fluid rounded-circle animate__animated animated__bounce" alt="">
                <h3 class="animate__animated animate__fadeInUp ">Pierre Legrand</h3>
                <div class="animate__animated animate__fadeInDown">Étudiant en BTS SIO</div>
            </div>
            <div class="col-lg-5 col-md-6 text-justify">
                <h2> Qui suis-je ? </h2>
                <div>
                    <p style=" text-indent: 30px;" class="m-0">
                        Je m’appelle Pierre Legrand, j’ai 19 ans, et je suis passionné par l’informatique.
                        Très curieux de nature et logique, je suis attiré de longue date l’informatique.
                        Je suis dynamique, sérieux et méthodique dans tous les domaines qui me passionnent et ma
                        curiosité m’amène sans cesse à repousser mes limites pour progresser.
                    </p>
                    <p style=" text-indent: 30px;" class="m-0">
                        Après ma classe de Seconde Générale, alors que j’étais admis en Première Scientifique,
                        j’ai volontairement choisi, par passion pour l’informatique, la voie de l’enseignement
                        professionnel en intégrant une première BAC Professionnel SEN (Systèmes Electroniques
                        Numériques).
                    </p>
                    <p style=" text-indent: 30px;" class="m-0">
                        Après l’obtention de ce diplôme, j’ai intégré le BTS SIO (Services Informatiques aux
                        organisations) option SLAM. J’ai choisi l’enseignement professionnel car l’expérience
                        acquise lors des stages est très appréciée par les employeurs.
                    </p>
                </div>
                <div class="d-flex justify-content-around">
                    <a href="pdf/cv.pdf" class="btn text-white" target="pdf" download="CV de Pierre Legrand"
                       style="background-image: linear-gradient(90deg, #42b5ee  0%, #3979c6 35%, #3455ae 100%); ">
                        <i class="bi bi-file-earmark-pdf"></i>
                        Téléchager mon CV
                    </a>
                    <a href="#" class="btn text-white"
                       data-bs-toggle="modal" data-bs-target="#cv"
                       style="background-image: linear-gradient(90deg, #42b5ee  0%, #3979c6 35%, #3455ae 100%); ">
                        <i class="bi bi-file-earmark-pdf"></i>
                        Visualiser mon CV
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 text-justify">
                <h2> Mes objectifs professionels ? </h2>
                <div>
                    <p style=" text-indent: 30px;" class="m-0">
                        Je souhaite intégrer la licence professionnelle CDAISI (Cyber Défense, Anti-Intrusion des
                        Systèmes d’Information) dès la rentrée universitaire 2021 après l’obtention de mon BTS SIO.
                        En effet, mes stages en milieu professionnel m’ont fait prendre conscience que la priorité
                        actuelle des entreprises est la volonté de sécuriser leurs réseaux informatiques pour
                        garantir la confidentialité des données et le bon fonctionnement des systèmes.
                    </p>
                    <p style=" text-indent: 30px;" class="m-0">
                        Fort de cette constatation et conscient des débouchés actuels de cette formation, je
                        souhaite donc me spécialiser dans ce domaine.
                    </p>
                </div>
            </div>
        </div>
        <h2> Mes compétences </h2>
        <div class="row">
            <div class="col-lg-7 col-md-6 text-justify">
                <h5 class="mb-3">
                    <i class="bi bi-three-dots-vertical">Langage </i>
                    <i id='aide' class="bi bi-info-circle p-3 text-primary"
                       data-bs-toggle="popover"
                       data-bs-trigger="hover"
                       data-bs-html="true"
                       data-bs-placement='top'
                       data-bs-content="Survoler les logos pour voir le niveau <br>
					 Débutant : une étoile<br>
					 Confirmé : 2 étoiles<br>
					 Expert&nbsp;&nbsp;&nbsp;&nbsp; : 3 étoiles<br>"
                       data-bs-original-title="Niveau de connaissance">
                    </i>
                </h5>
                <img src="img/langage/html5.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true"
                     title="<i class='bi bi-star'></i><i class='bi bi-star'></i><i class='bi bi-star'></i>"
                     alt="">

                <img src="img/langage/css.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                     title="<i class='bi bi-star'></i><i class='bi bi-star'></i><i class='bi bi-star'></i>"
                     alt="">

                <img src="img/langage/javascript.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                     title="<i class='bi bi-star'></i><i class='bi bi-star'></i><i class='bi bi-star'></i>"
                     alt="">

                <img src="img/langage/php.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                     title="<i class='bi bi-star'></i><i class='bi bi-star'></i>"
                     alt="">

                <img src="img/langage/c.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                     title="<i class='bi bi-star'></i><i class='bi bi-star'></i><i class='bi bi-star'></i>"
                     alt="">

                <img src="img/langage/sql.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                     title="<i class='bi bi-star'></i><i class='bi bi-star'></i><i class='bi bi-star'></i>"
                     alt="">
                <hr>
            </div>
            <div class="col-lg-5 col-md-6 text-justify">
                <h5 class="mb-3">
                    <i class="bi bi-three-dots-vertical">Framework </i>
                </h5>
                <img src="img/framework/bootstrap.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bootstrap" alt="">

                <img src="img/framework/jquery.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom" title="jQuery" alt="">
                <img src="img/framework/symfony.png" class="m-3"
                     data-bs-toggle="tooltip" data-bs-placement="bottom" title="Symfony" alt="">
                <hr>
            </div>
        </div>
        <div class="p-2">
            <h5 class=""><i class="bi bi-three-dots-vertical">Logiciels</i></h5>

            <img src="img/logiciel/visual.png" class="m-3"
                 data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visual Studio 2019" alt="">

            <img src="img/logiciel/wampserver.png" class="m-3"
                 data-bs-toggle="tooltip" data-bs-placement="bottom" title="WampServer" alt="">

            <img src="img/logiciel/phpstorm.png" class="m-3"
                 data-bs-toggle="tooltip" data-bs-placement="bottom" title="PHPStorm" alt="">

            <img src="img/logiciel/mysqlworkbench.png" class="m-3"
                 data-bs-toggle="tooltip" data-bs-placement="bottom" title="MySQL Workbench" alt="">

            <img src="img/logiciel/phpmyadmin.png" class="m-3"
                 data-bs-toggle="tooltip" data-bs-placement="bottom" title="PhpMyAdmin" alt="">

            <img src="img/logiciel/mysql.png" class="m-3"
                 data-bs-toggle="tooltip" data-bs-placement="bottom" title="MySQL" alt="">
        </div>


    </main>
    <footer class="">
        <?php
        require 'include/pied.php';
        ?>
    </footer>
</div>
<!-- fenêtre modal pour les conditions d'utilisation -->
<div class=" modal fade  p-0 " id="cv" data-bs-backdrop="true" data-bs-keyboard="true"
     tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-body styleCadre">
                <object type="application/pdf" data="pdf/cv.pdf" width="100%" height="610px">
                </object>
            </div>
        </div>
    </div>
</div>
</body>

</html>