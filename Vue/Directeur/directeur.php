<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil directeur</title>
    <link rel="stylesheet" href="/Vue/Directeur/directeur.css"> <!-- Lien vers le CSS -->
</head>
<body>
<header>
        <h1>Bienvenue, Directeur !</h1>
</header>
    <div class="form-container">
        <form id="ajouEmp" action="banque.php" method="post">
            <fieldset>
                <h2>Ajouter un employé</h2>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="login">Login :</label>
                <input type="text" id="login" name="login" required>

                <label for="mdp">Mot de passe :</label>
                <input type="password" id="mdp" name="mdp" required>

                <label for="categorie">Catégorie :</label>
                <input type="text" id="categorie" name="categorie" required>

                <input type="submit" value="Envoyer" name="ajouterEmploye">
            </fieldset>
        </form>

        <form id="lisEmp" action="banque.php" method="post">
            <fieldset>
                <h2>Consulter la liste des employés</h2>
                <input type="submit" value="Liste Employés" name="afficherEmployes">
            </fieldset>
        </form>

        <form id="conEmp" action="banque.php" method="post">
            <fieldset>
                <h2>Consulter les informations d'un employé</h2>
                <label for="id">ID :</label>
                <input type="text" id="id" name="id" required>
                <input type="submit" value="Informations" name="informationEmploye">
            </fieldset>
        </form>

        <form id="modEmp" action="banque.php" method="post">
            <fieldset>
                <h2>Modifier un employé</h2>
                <label for="id-mod">ID :</label>
                <input type="text" id="id-mod" name="id" required>

                <label for="login-mod">Nouveau login :</label>
                <input type="text" id="login-mod" name="login" required>

                <label for="motDePasse-mod">Nouveau mot de passe :</label>
                <input type="password" id="motDePasse-mod" name="motDePasse" required>

                <input type="submit" value="Modifier" name="modifierEmploye">
            </fieldset>
        </form>

        <form id="supEmp" action="banque.php" method="post">
            <fieldset>
                <h2>Supprimer un employé</h2>
                <label for="id-sup">ID :</label>
                <input type="text" id="id-sup" name="id" required>
                <input type="submit" value="Supprimer" name="supprimerEmploye">
            </fieldset>
        </form>
    </div>
</body>
</html>