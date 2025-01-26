<!DOCTYPE html>
<!-- Contient l'HTML du squelette principal et statique de la page.-->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil directeur</title>
</head>
<body>
    <form id="ajouEmp" action="banque.php" method="post">
    <fieldset> 
        ajouter employé :
        <p><label> nom : </label><input type="text" name="nom" /></p>
        <p><label> login : </label><input type="text" name="login" /></p>
        <p><label> mot de passe : </label><input type="password" name="mdp" /></p>
        <p><label> categorie : </label><input type="text" name="categorie" /></p>
        <p> <input type="submit" value="Envoyer" name="ajouterEmploye" /> </p>
    </fieldset>

    <form id="lisEmp" action="banque.php" method="post">
    <fieldset> 
        consulter liste employés :
        <p> <input type="submit" value="Liste Employés" name="afficherEmployes" /> </p>
    </fieldset>
    </form>

    <form id="conEmp" action="banque.php" method="post">
    <fieldset> 
        consulter information employé :
        <p><label> id : </label><input type="text" name="id" /></p>
        <p> <input type="submit" value="Informations" name="informationEmploye" /> </p>
    </fieldset>
    </form>

    <form id="modEmp" action="banque.php" method="post">
    <fieldset> 
        modifier employé :
        <p><label> id : </label><input type="text" name="id" /></p>
        <p><label> Nouveau login : </label><input type="text" name="login" /></p>
        <p><label>Nouveau mot de passe : </label><input type="password" name="motDePasse" /></p>
        <p> <input type="submit" value="Modifier" name="modifierEmploye" /> </p>
    </fieldset>
    </form>

    <form id="supEmp" action="banque.php" method="post">
    <fieldset> 
        Supprimer employé :
        <p><label> id : </label><input type="text" name="id" /></p>
        <p> <input type="submit" value="Supprimer" name="supprimerEmploye" /> </p>
    </fieldset>
    </form>

</form>
</body>
</html>