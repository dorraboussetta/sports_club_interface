<?php
require_once __DIR__ . "/../Classes/activite.php";

$nom = htmlspecialchars($_POST["nom"]);
$categorie = htmlspecialchars($_POST["categorie"]);
$description = htmlspecialchars($_POST["description"]);
$jour = htmlspecialchars($_POST["jour"]);
$heure = htmlspecialchars($_POST["heure"]);
$tarif = floatval($_POST["tarif"]);
$places = intval($_POST["places"]);
$statut = htmlspecialchars($_POST["statut"]);
$disponibilite = htmlspecialchars($_POST["disponibilite"]);
$badge = htmlspecialchars($_POST["badge"]);
$promotion = isset($_POST["promotion"]);
$icon = htmlspecialchars($_POST["icon"]);

$erreurs = [];

if (!isset($_POST["nom"]) || empty(trim($nom))) {
    $erreurs[] = "Le champ de nom est obligatoire.";
};

if (!isset($_POST["categorie"]) || empty(trim($categorie))) {
    $erreurs[] = "Le champ de categorie est obligatoire.";
};

if (!isset($_POST["description"]) || empty(trim($description))) {
    $erreurs[] = "Le champ de description est obligatoire.";
};

if (!isset($_POST["jour"]) || empty(trim($jour))) {
    $erreurs[] = "Le champ de jour est obligatoire.";
};

if (!isset($_POST["heure"]) || empty(trim($heure))) {
    $erreurs[] = "Le champ de heure est obligatoire.";
};

if (!isset($_POST["statut"]) || empty(trim($statut))) {
    $erreurs[] = "Le champ de statut est obligatoire.";
};
if (!isset($_POST["disponibilite"]) || empty(trim($disponibilite))) {
    $erreurs[] = "Le champ de disponibilite est obligatoire.";
};
if (!isset($_POST["badge"]) || empty(trim($badge))) {
    $erreurs[] = "Le champ de badge est obligatoire.";
};
if (!isset($_POST["icon"]) || empty(trim($icon))) {
    $erreurs[] = "Le champ de icon est obligatoire.";
};

if (!isset($_POST["tarif"]) || $tarif <= 0) {
    $erreurs[] = "Le tarif doit être strictement supérieur à 0.";
};

if (!isset($_POST["places"]) || $places < 0) {
    $erreurs[] = "Le nombre de places doit être supérieur ou égal à 0.";
};

echo "<link rel='stylesheet' href='../assets/css/style.css'>"; 

if (empty($erreurs)){
    try {
        $football_activite = new Activite(1, $icon, $nom, $description, $categorie, $jour, $heure, $tarif, $badge, $statut, $promotion, $places, $disponibilite);
        echo "<div class='container'><h3 class='submission-success-msg'>Activité ajoutée avec succès!</h3></div><br>"; 
        $football_activite->activite_detail(); 
    }catch (Exception $e){
        echo $e->getMessage(); 
    }; 
}else {
    foreach($erreurs as $erreur) {
        echo "<p> $erreur </p> <br>"; 
    }; 
}; 
