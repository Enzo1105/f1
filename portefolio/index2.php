<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio de Pierre Legrand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="icone.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0./particles.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <script src="index.js"></script>

</head>
<body>
<div class="d-flex flex-column h-100 ">
    <header>
        <?php
        require 'include/menu.php';
        // img-fluid rounded-circle
        ?>
    </header>
    <main class="flex-grow-1 d-flex justify-content-center align-items-center position-relative background">
       <div class="text-center p-2" style="z-index: 0">
           <img src="img/photo.png" alt="" class="maPhoto " >
           <p>bonjour, je m'appelle Pierre Legrand</p>
           <p>Je suis actuellement en première année de BTS SIO</p>
           <p>Je me dirige vers le métier de développeur full-stack</p>
       </div>
    </main>
    <footer class="">
        <?php
        require 'include/pied.php';
        ?>
    </footer>
</div>
</body>

</html>