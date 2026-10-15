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

<body id="homepage-body">
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
            <h2>Bienvenu au Club Sportif</h2>
            <p class="center-text">Rejoignez notre communauté sportive et participez à nos nombreuses activités.</p>
            <hr>
            <h2>Nos activités en vedette</h2>


            <div class="grid-cards act-list">
                <?php
                foreach ($activites as $activite) {
                    if ($activite['statut'] == "publie") {

                        if ($activite['promotion']) {
                            $nom = "{$activite['nom']} <span class='badge badge-accent'>Offre Spéciale</span>";
                        } else {
                            $nom = "{$activite['nom']}";
                        };

                        echo "<div class='act-card'>"
                            . "<p class='icon'>{$activite['icon']}</p>"
                            . "<h3>$nom</h3>"
                            . "<p class='muted'>{$activite['categorie']}</p>"
                            . "<p class='badge {$activite['badge']}'>{$activite['Disponibilite']}</p>"
                            . "</div>";
                    }
                }
                ?>
            </div>


            <h2>À propos de notre club</h2>
            <div class="about-card about">
                <p class="about-text">Depuis plusieurs années, notre club sportif accompagne les passionnés de sport en
                    proposant des
                    activités
                    variées adaptées à tous les âges et à tous les niveaux.</p>
                <p class="about-text">Notre objectif est de promouvoir un mode de vie sain, l'esprit d'équipe et le
                    dépassement de soi dans
                    une
                    ambiance conviviale et motivante.</p>

                <div class="about-stats">
                    <div class="stat-card">
                        <p class="stat-number"><?php echo count($activites); ?> </p>
                        <p class="stat-label">Activités sportives</p>
                    </div>
                    <div class="stat-card">
                        <p class="stat-number">500+</p>
                        <p class="stat-label">Adhérents</p>
                    </div>
                    <div class="stat-card">
                        <p class="stat-number">20</p>
                        <p class="stat-label">Entraîneurs</p>
                    </div>
                </div>
                <div class="about-action">
                    <a class="btn btn-primary about-btn" href="#">Découvrir nos activités</a>
                </div>

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



    </footer>
</body>

</html>