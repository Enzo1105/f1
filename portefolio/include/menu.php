
<!-- barre de navigation        -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-danger ">

    <a class="navbar-brand" href="index.php" data-bs-toggle='tooltip' title="Accueil" data-placement='bottom'>
        <i class="bi bi-house" style="font-size: 2rem; " ></i>
        <span class="masquer text-white">Portfolio de Pierre Legrand</span>
    </a>

    <!-- bouton qui apparait quand le menu est réduit -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-content"
            aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- début de la barre de menu -->
    <div class="collapse navbar-collapse justify-content-center" id="nav-content">
        <!-- menu -->
        <ul class="nav navbar-nav">

             <!-- menu avec 2 options -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                   role="button" aria-haspopup="true" aria-expanded="false">
                    Présentation
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="profil.php">Mon profil</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="parcours.php">Mon parcours</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                   role="button" aria-haspopup="true" aria-expanded="false">
                    Projets
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">Cas Gsb - Gestion des visites en C#</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Réalisation Portfolio</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="association.php">Site d'une association sportive</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                   role="button" aria-haspopup="true" aria-expanded="false">
                    Stages
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="#">Première année</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Seconde année</a>
                    </li>
                </ul>
            </li>

            <!-- menu sans option -->
            <li class="nav-item">
                <a class="nav-link" href="veille.php">Veille technologique</a>
            </li>

        </ul>
    </div>
</nav>