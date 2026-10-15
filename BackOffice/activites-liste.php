<?php
 

$activities = [ 
    [ 
        'id' => 1, 
        'nom' => 'Football', 
        'categorie' => 'Sports de ballon', 
        'jour' => 'Samedi', 
        'heure' => '10h00 - 12h00', 
        'tarif' => '30 EUR', 
        'spots' => 'Disponible', 
        'badge' => 'badge-paye' 
    ], 
    [ 
        'id' => 2, 
        'nom' => 'Natation', 
        'categorie' => 'Sports aquatiques', 
        'jour' => 'Mardi et jeudi', 
        'heure' => '18h00 - 19h30', 
        'tarif' => '25 EUR', 
        'spots' => 'Disponible', 
        'badge' => 'badge-paye' 
    ], 
    [ 
        'id' => 3, 
        'nom' => 'Fitness', 
        'categorie' => 'Sport individuel', 
        'jour' => 'Du lundi au vendredi', 
        'heure' => '07h00 - 21h00', 
        'tarif' => '35 EUR', 
        'spots' => 'Places limitées', 
        'badge' => 'badge-attente' 
    ], 
    [ 
        'id' => 4, 
        'nom' => 'Basketball', 
        'categorie' => 'Sports de ballon', 
        'jour' => 'Mercredi', 
        'heure' => '16h00 - 18h00', 
        'tarif' => '30 EUR', 
        'spots' => 'Disponible', 
        'badge' => 'badge-paye' 
    ] 
];




?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'activités</title>
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

            <h2>Liste d'activités</h2>
            <div class="container">
                <table class="table-liste">
                    <tr>
                        <th>Nom</th>
                        <th>Catégorie</th>
                        <th>Jour</th>
                        <th>Heure</th>
                        <th>Tarif</th>
                        <th>Spots</th>
                    </tr>

                    <?php
                    foreach ($activities as $activite) {
                        echo "<tr>" 
                        ."<td> {$activite['nom']} </td>"  
                        ."<td> {$activite['categorie']}</td>"
                        ."<td> {$activite['jour']}</td>"
                        ."<td> {$activite['heure']}</td>"
                        ."<td> {$activite['tarif']}</td>"
                        ."<td> <p class='badge {$activite['badge']}'>{$activite['spots']}</p></td>"
                        ."</tr>"; 
                    }; 


                    ?>
                </table>
            </div>



        </div>
    </div>

</body>

</html>