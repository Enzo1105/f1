<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio de Pierre Legrand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="icone.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script src="https://kit.fontawesome.com/461e0b0873.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timeline.css">

    <script src="parcours.js"></script>

</head>
<body>
<div class="container-fluid d-flex flex-column p-0 h-100">
    <header>
        <?php require 'include/menu.php' ?>
    </header>
    <main class="flex-grow-1 m-0 p-0">

        <div id="chronologie" style="display:none">
            <ul class="timeline animate__fadeInDown animate__animated">
                <li>
                    <div class="timeline-badge">2019</div>
                    <div class="timeline-panel animate__fadeInLeft animate__animated">
                        <div class="timeline-title">BEP Systèmes électroniques numériques</div>
                        <p><i class="fa-solid fa-house p-1"></i>Amiens - Lyçée Saint-Riquier</p>
                        Diplôme obtenu durant ma formation en BAC PRO Systèmes électroniques numériques,
                        le BEP SEN valide un ensemble de connaissances et de compétences générales et
                        professionnelles.
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge">2020</div>
                    <div class="timeline-panel animate__fadeInRight animate__animated">
                        <div class="timeline-title">BAC PRO Systèmes électroniques numériques</div>
                        <p><i class="fa-solid fa-house p-1"></i>Amiens - Lyçée Saint-Riquier</p>
                        Après 3 ans de formation, et 5 domaines étudiés (Télécommunication et Reseau,
                        Electronique Industrielle Embarquée, Electrodomestique, Audiovisuel
                        professionnel, Audiovisuel Multimédia, Alarme Sécurité Incendie) obtention de
                        mon BAC PRO SEN.
                    </div>
                </li>
                <li>
                    <div class="timeline-badge">2021</div>
                    <div class="timeline-panel animate__fadeInLeft animate__animated">
                        <div class="timeline-title">BTS Services informatiques aux organisations</div>
                        <p><i class="fa-solid fa-house p-1"></i>Amiens - Lyçée Saint-Rémi </p>
                        Actuellement en première année de BTS SIO, Spécialité SLAM, je passerai mes
                        épreuves en Mai et Juin 2023.
                    </div>
                </li>
            </ul>
        </div>


        <div id="liste" style="display:none">

            <!-- seconde représentation sous forme de carte bootstrap -->
            <div class="card m-3 animate__fadeInDown animate__animated">
                <div class="card-header timeline-title styleCadre">
                    2019 BEP Systèmes électroniques numériques
                </div>
                <div class="card-body styleCadre">
                    <p><i class="fa-solid fa-house p-1"></i>Amiens - Lyçée Saint-Riquier</p>
                    Diplôme obtenu durant ma formation en BAC PRO Systèmes électroniques numériques, le BEP SEN valide
                    un ensemble de connaissances et de compétences générales et professionnelles.
                </div>
            </div>
            <div class="card m-3 animate__fadeInDown animate__animated">
                <div class="card-header timeline-title styleCadre">
                    2020 BAC PRO Systèmes électroniques numériques
                </div>
                <div class="card-body styleCadre">
                    <p><i class="fa-solid fa-house p-1"></i>Amiens - Lyçée Saint-Riquier</p>
                    Après 3 ans de formation, et 5 domaines étudiés (Télécommunication et Reseau, Electronique
                    Industrielle Embarquée, Electrodomestique, Audiovisuel professionnel, Audiovisuel Multimédia, Alarme
                    Sécurité Incendie) obtention de mon BAC PRO SEN.
                </div>
            </div>
            <div class="card m-3 animate__fadeInDown animate__animated">
                <div class="card-header timeline-title styleCadre">
                    2021 BTS Services informatiques aux organisations
                </div>
                <div class="card-body styleCadre">
                    <p><i class="fa-solid fa-house p-1"></i>Amiens - Lyçée Saint-Rémi</p>
                    Actuellement en première année de BTS SIO, Spécialité SLAM, je passerai mes épreuves en Mai et Juin
                    2023.
                </div>
            </div>
        </div>
    </main>
    <footer class="">
        <?php require 'include/pied.php' ?>
    </footer>
</div>
</body>

</html>

