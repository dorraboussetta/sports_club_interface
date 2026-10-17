<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'activités</title>
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
            <h2>Formulaire activité</h2>

            <div class="form-container">

                <form class="form-card" action="activite-traitement.php" method="post">
                    <label for="nom">Nom de l'activité </label>
                    <input id="nom" name="nom" type="text" minlength="3" maxlength="50" pattern="[a-zA-Z0-9 ]+" required>

                    <label for="categorie">Catégorie </label>
                    <select name="categorie" id="categorie" required>
                        <option value="">-- choisir -- </option>
                        <option value="football">Football</option>
                        <option value="natation">Natation</option>
                        <option value="fitness">Fitness</option>
                    </select>

                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="5" maxlength="300"
                        placeholder="Description de l'activité (max 300 caractères)." required></textarea>

                    <label for="jour">Jour</label>
                    <select name="jour" id="jour">
                        <option value="">--</option>
                        <option value="lundi">Lundi</option>
                        <option value="mardi">Mardi</option>
                        <option value="mercredi">Mercredi</option>
                        <option value="jeudi">Jeudi</option>
                        <option value="vendredi">Vendredi</option>
                        <option value="samedi">Samedi</option>
                        <option value="dimanche">Dimanche</option>
                    </select>

                    <label for="horaire">Horaire</label>
                    <input id="horaire" name="horaire" type="text" placeholder="HH:MM -- HH:MM"
                        pattern="([01][0-9]|2[0-3]):[0-5][0-9] -- ([01][0-9]|2[0-3]):[0-5][0-9]" required>

                    <label for="tarif">Tarif(£/mois)</label>
                    <input id="tarif" name="tarif" type="number" required>

                    <label for="places">Nombre de places</label>
                    <input id="places" name="places" type="number" min="1" max="200" step="1" required>

                    <label for="statut">Statut de publication</label>
                    <select id="statut" name="statut" required>
                        <option value="publie">Publié</option>
                        <option value="brouillon">Brouillon</option>
                    </select>

                    <label for="disponibilite">Spots Availability</label>
                    <select id="disponibilite" name="disponibilite" required>
                        <option value="">-- Choisissez la disponibilité --</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Places limitées">Places limitées</option>
                    </select>

                    <label for="badge">Badge</label>
                    <select id="badge" name="badge" required>
                        <option value="">-- Choosissez un badge --</option>
                        <option value="badge-paye">badge-paye</option>
                        <option value="badge-attente">badge-attente</option>
                    </select>

                    <label for="icon">Nombre de places</label>
                    <input id="icon" name="icon" type="text" required>

                    <label>
                        <input type="checkbox" id="promotion" name="promotion" value="1"> Activité en promotion
                        (Offre Spécial)
                    </label>

                    <div class="form-btn-div">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a class="btn btn-secondary">Annuler</a>
                    </div>




                </form>
            </div>
        </div>
    </div>




</body>

</html>