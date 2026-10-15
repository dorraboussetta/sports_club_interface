<?php
 

$activites = [ 
    [ 
        'id' => 1, 
        'nom' => 'Football', 
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
        'categorie' => 'Sports aquatiques', 
        'jour' => 'Mardi et jeudi', 
        'heure' => '18h00 - 19h30', 
        'tarif' => '25 EUR', 
        'Disponibilite' => 'Disponible', 
        'badge' => 'badge-paye' , 
        'places' => 22,  
        'statut' => 'publie', 
        'promotion' => true  
    ], 
    [ 
        'id' => 3, 
        'nom' => 'Fitness', 
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
            <h2>Statistiques</h2>
            <div class="container">
                <table class="table-liste">
                    <tr>
                        <th>Nombre d'activités</th>
                        <th>Capacité d'acceuil totale</th>
                    </tr>

                    <tr>
                        <td> 
                            <?php
                                echo count($activites); 
                            ?>
                        </td>

                        <td>
                            <?php
                                echo array_sum(array_column($activites, 'places')); 
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

            <h2>Liste d'activités</h2>
            <div class="container">
                <table class="table-liste">
                    <tr>
                        <th>Nom</th>
                        <th>Catégorie</th>
                        <th>Jour</th>
                        <th>Heure</th>
                        <th>Tarif</th>
                        <th>Places</th>
                        <th>Disponibilité</th>
                    </tr>

                    <?php
                    foreach ($activites as $activite) {

                        if (intval($activite['tarif'])>30) {
                            $tarif = "{$activite['tarif']} <p> <strong> (Premium) </strong> </p>"; 
                        } else {
                             $tarif = "{$activite['tarif']}"; 
                        }; 

                        echo "<tr>" 
                        ."<td> {$activite['nom']} </td>"  
                        ."<td> {$activite['categorie']}</td>"
                        ."<td> {$activite['jour']}</td>"
                        ."<td> {$activite['heure']}</td>"
                        ."<td> $tarif</td>"
                        ."<td> {$activite['places']}</td>"
                        ."<td> <p class='badge {$activite['badge']}'>{$activite['Disponibilite']}</p></td>"
                        ."</tr>"; 
                    }; 


                    ?>
                </table>
            </div>



        </div>
    </div>

</body>

</html>