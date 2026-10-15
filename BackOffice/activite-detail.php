<?php

$activites = [
    [
        'id' => 1,
        'nom' => 'Football',
        'icon' => '&#9917;',
        'description' => 'Améliorez votre technique, votre endurance et votre esprit d’équipe à travers des entraînements dynamiques et des matchs collectifs.',
        'categorie' => 'Sports de ballon',
        'jour' => 'Samedi',
        'heure' => '10h00 - 12h00',
        'tarif' => '30 EUR',
        'Disponibilite' => 'Disponible',
        'badge' => 'badge-paye',
        'places' => 25,
        'statut' => 'publie',
        'promotion' => false
    ],
    [
        'id' => 2,
        'nom' => 'Natation',
        'icon' => '&#127946;',
        'description' => 'Développez votre endurance et perfectionnez vos techniques de nage grâce à des séances adaptées à différents niveaux.',
        'categorie' => 'Sports aquatiques',
        'jour' => 'Mardi et jeudi',
        'heure' => '18h00 - 19h30',
        'tarif' => '25 EUR',
        'Disponibilite' => 'Disponible',
        'badge' => 'badge-paye',
        'places' => 22,
        'statut' => 'publie',
        'promotion' => true
    ],
    [
        'id' => 3,
        'nom' => 'Fitness',
        'icon' => '&#127947;',
        'description' => 'Renforcez vos muscles, améliorez votre condition physique et gagnez en énergie grâce à des exercices variés et motivants.',
        'categorie' => 'Sport individuel',
        'jour' => 'Du lundi au vendredi',
        'heure' => '07h00 - 21h00',
        'tarif' => '35 EUR',
        'Disponibilite' => 'Places limitées',
        'badge' => 'badge-attente',
        'places' => 15,
        'statut' => 'brouillon',
        'promotion' => false
    ],
    [
        'id' => 4,
        'nom' => 'Basketball',
        'icon' => '&#127936;',
        'description' => 'Perfectionnez vos tirs, vos passes et votre coordination tout en développant votre esprit d’équipe lors de séances collectives.',
        'categorie' => 'Sports de ballon',
        'jour' => 'Mercredi',
        'heure' => '16h00 - 18h00',
        'tarif' => '30 EUR',
        'Disponibilite' => 'Disponible',
        'badge' => 'badge-paye',
        'places' => 15,
        'statut' => 'brouillon',
        'promotion' => false
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails d'activités</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <nav class="backoffice-navbar navbar">
        <div class="navbar-inner">
            <h4>Club Sportif</h4>
            <div class="navbar-links return-link">
                <a href="#">Retour au site</a>
            </div>
        </div>
    </nav>

    <div class="backoffice-layout">
        <div class="sidebar">
            <div class="sidebar-brand ">
                <h4>BackOffice</h4>
            </div>

            <div class="sidebar-nav">
                <a href="#">Activités</a>
                <a href="#">Nouvelle activité</a>
                <a href="#">Adhérents</a>
                <a href="#">Nouvel adhérent</a>
            </div>

        </div>

        <div class="main-content">


            <h2>Détails d'activités</h2>
            <div class="container">

                <div class="act-detail-grid">

                    <?php
                    foreach ($activites as $activite) {

                        if ($activite['statut'] == "publie") {

                            if (intval($activite['tarif']) > 30) {
                                $premium_msg = "<p> <strong> (Premium) </strong> </p>";
                            } else {
                                $premium_msg = "";
                            };

                            if ($activite['promotion']) {
                                $nom = "{$activite['nom']} <span class='badge badge-accent'>Offre Spéciale</span>";
                            } else {
                                $nom = "{$activite['nom']}";
                            };

                            echo "<div class='act-list-card'>"
                                . "<p>{$activite['icon']}</p>"
                                . "<h3>$nom</h3>"
                                . "<p>{$activite['description']}</p>"
                                . "<p> <b>Catégorie:</b> {$activite['categorie']}</p>"
                                . "<p> <b>Jour:</b>  {$activite['jour']}</p>"
                                . "<p> <b>Heure:</b> {$activite['heure']}</p>"
                                . "<p> <b>Tarif:</b> " . number_format((float)$activite['tarif'], 2, ',') . " $premium_msg</p>"
                                . "<p> <b>Places:</b> {$activite['places']}</p>"
                                . "<div class='badge-div'> <p class='badge {$activite['badge']}'>{$activite['Disponibilite']}</p></div>"
                                . "<p><b>Liste d'adhérents inscrits: </b> <br><ul> <li>3671</li> <li>4829</li> </ul></p>"
                                . "<div class='form-btn-div'> <a href='#' class='btn btn-primary'>Modifier</a> <a href='#' class='btn btn-danger'>Supprimer</a>"
                                . "</div>"
                                . "</div>";
                        }
                    };


                    ?>
                </div>
            </div>


        </div>
    </div>

</body>

</html>