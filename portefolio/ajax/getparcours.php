<?php
// Génération de l'objet PDO permettant l'accès à la base de données
try {
    $db = new PDO("sqlite:portfolio.db");
    $db->exec("SET NAMES 'utf8'");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Accès à la base de données impossible, vérifiez les paramètres de connexion";
    exit();
}
// récupération des données de la table parcours


// exécuter la requête et stocker la réponse dans une variable objet de type PDOStatement


// Récupérer les lignes résultantes et les stocker dans un tableau PHP



// fermer l'objet contenant la réponse pour libérer les ressources


// affichage (envoi) des données dans le format JSON


