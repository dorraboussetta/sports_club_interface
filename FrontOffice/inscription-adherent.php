<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription adhérent</title>
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
        <h2>Inscription adhérent</h2>
        <div class="form-container">
            

            <form class="form-card" action="#" method="post">
                <label for="">Nom</label>
                <input type="text" minlength="2" maxlength="30" pattern="[a-zA-Z -]+" required>

                <label for="">Prénom</label>
                <input type="text" minlength="2" maxlength="30" pattern="[a-zA-Z -]+" required>

                <label for="">Email</label>
                <input type="text" pattern=".+@(gmail\.com|outlook\.com|yahoo\.com|icloud\.com)" minlength="11"
                    maxlength="255" required>

                <label for="">Téléphone</label>
                <input type="tel" pattern="[(0-9)]{8,15}" required>

                <label for="">Activité souhaitée</label>
                <select name="" id="" required>
                    <option value="">-- choisir une activité-- </option>
                    <option value="football">Football</option>
                    <option value="natation">Natation</option>
                    <option value="fitness">Fitness</option>
                </select>

                <label for="">Durée</label>
                <select name="" id="">
                    <option value="">-- Choisir une durée</option>
                    <option value="1">1 mois</option>
                    <option value="3">3 mois</option>
                    <option value="6">6 mois</option>
                    <option value="12">12 mois</option>
                </select>

                <label for="">Tarif</label>
                <input type="text" value="120 DT" readonly>

                <div class="form-btn-div">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a class="btn btn-secondary">Annuler</a>
                </div>

            </form>
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