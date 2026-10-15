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
    <title>Acceuil</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>

        <nav class="navbar">
            <div class="navbar-inner">
                <a href="#"><img src="../assets/img/logo.png" alt="club logo"></a>

                <div class="navbar-links">
                    <a href="#">Acceuil</a>
                    <a href="#">Activités</a>
                    <a href="#">À Propos</a>
                    <a href="#">Inscription</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <h2>Nos activités</h2>
            <div class="act-list-grid">

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
                            . "</div>";
                    }
                };


                ?>
            </div>
        </div>


    </main>

    <footer>
        <div class="footer-container">
            <h2>Contact</h2>
            <div class="footer-contact">

                <div>
                    <p>Addresse: Tunis, Tunisie</p>
                </div>
                <div>
                    <p>Téléphone: +216 70 000 000</p>
                </div>
                <div>
                    <p>Email: contact@clubsportif.tn</p>
                </div>
            </div>
            <div>

            </div>
            <div class="footer-links">
                <a href="#">Acceuil</a>
                <a href="#">Activités</a>
                <a href="#">Inscription</a>
            </div>

            <p class="footer-bottom">© Club Sportif - Tous droits réservés</p>

        </div>
</body>

</html>