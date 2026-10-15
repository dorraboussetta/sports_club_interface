<?php

class Activite
{
    private int $id;
    private string $icon;
    private string $nom;
    private string $description;
    private string $categorie;
    private string $jour;
    private string $heure;
    private float $tarif;
    private string $badge;
    private string $statut;
    private bool $promotion;
    private int $places;
    private string $disponibilite;
    private bool $idAlreadySet = false;

    public function __construct(int $id, string $icon, string $nom, string $description, string $categorie, string $jour, string $heure, float $tarif, string $badge, string $statut, bool $promotion, int $places, string $disponibilite)
    {
        $this->__set("id", $id);
        $this->__set("icon", $icon);
        $this->__set("description", $description);
        $this->__set("nom", $nom);
        $this->__set("categorie", $categorie);
        $this->__set("jour", $jour);
        $this->__set("heure", $heure);
        $this->__set("tarif", $tarif);
        $this->__set("badge", $badge);
        $this->__set("statut", $statut);
        $this->__set("promotion", $promotion);
        $this->__set("places", $places);
        $this->__set("disponibilite", $disponibilite);
    }

    public function __set(string $propriete, mixed $valeur): void
    {

        if ($propriete == "id") {
            if ($this->idAlreadySet == false) {
                $this->id = $valeur;
                $this->idAlreadySet = true;
            } else {
                throw new Exception("L'identifiant ne peut pas être modifié.");
            }
        } else if (in_array($propriete, ["icon", "description", "nom", "categorie", "jour", "heure"])) {
            if (empty($valeur)) {
                throw new Exception("Ces valeurs ne peuvent pas être vide.");
            } else {
                $this->$propriete = $valeur;
            };
        } else if ($propriete == "places") {
            if ($valeur >= 0) {
                $this->$propriete = $valeur;
            } else {
                throw new Exception("Valeur invalide.");
            };
        } else if (($propriete == "tarif")) {
            if ($valeur > 0) {
                $this->$propriete = $valeur;
            } else {
                throw new Exception("Valeur invalide.");
            };
        } else if ($propriete == "promotion") {
            if (!in_array($valeur, [true, false], true)) {
                throw new Exception("Valeur invalide.");
            } else {
                $this->$propriete = $valeur;
            };
        } else if ($propriete == "disponibilite") {
            if (in_array($valeur, ["Disponible", "Places limitées"])) {
                $this->$propriete = $valeur;
            } else {
                throw new Exception("Valeur invalide.");
            };
        } else if ($propriete == "statut") {
            if (in_array($valeur, ["publie", "brouillon"])) {
                $this->$propriete = $valeur;
            } else {
                throw new Exception("Valeur invalide.");
            };
        } else if ($propriete == "badge") {
            if (in_array($valeur, ["badge-attente", "badge-paye"])) {
                $this->$propriete = $valeur;
            } else {
                throw new Exception("Valeur invalide.");
            };
        } else {
            throw new Exception("Propriété n'existe pas.");
        };
    }

    public function __get(string $propriete)
    {   
        if ($propriete == "id") {
            throw new Exception("Accès non autorisé."); 
        }; 
        return $this->$propriete;
    }



    public function activite_detail()
    {

        if (intval($this->tarif) > 30) {
            $premium_msg = "<strong> (Premium) </strong>";
        } else {
            $premium_msg = "";
        };
        echo "<div class='act-list-card'>"
            . "<p>{$this->icon}</p>"
            . "<h3>{$this->nom}</h3>"
            . "<p>{$this->description}</p>"
            . "<p> <b>Catégorie:</b> {$this->categorie}</p>"
            . "<p> <b>Jour:</b>  {$this->jour}</p>"
            . "<p> <b>Heure:</b> {$this->heure}</p>"
            . "<p> <b>Tarif:</b> " . number_format((float)$this->tarif, 2, ',') . " $premium_msg</p>"
            . "<p> <b>Places:</b> {$this->places}</p>"
            . "<div class='badge-div'> <p class='badge {$this->badge}'>{$this->disponibilite}</p></div>"
            . "<p><b>Liste d'adhérents inscrits: </b> <br><ul> <li>3671</li> <li>4829</li> </ul></p>"
            . "<div class='form-btn-div'> <a href='#' class='btn btn-primary'>Modifier</a> <a href='#' class='btn btn-danger'>Supprimer</a>"
            . "</div>"
            . "</div>";
    }
};
