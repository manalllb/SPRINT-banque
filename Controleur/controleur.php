<?php
require_once('Modele/modele.php');


function acceuil() {
    require_once('Vue/vue.php');
}
function ctlConnectEmploye($login,$mdp){
    if (!empty($login) && !empty($mdp)) {
        $categorie=connectEmploye($login,$mdp);
        if($categorie!=Null){
            $categorie = $categorie->categorie;
           acceuilEmploye($categorie);
        }else{
           echo "<p style='color:red;'>Erreur : identifiants invalides.</p>";
        acceuil();
    }
    }else {
        throw new Exception("les deux champs devrai etre remplies");
    }
 
}
function acceuilEmploye($categorie){
    switch ($categorie){
        case 'agent' : 
            require_once('Vue/agent.php');
            break;
        case 'conseiller':
            require_once('Vue/conseiller.php');
            break;
        case 'directeur':
            require_once('Vue/directeur.php');
            break;
        default:
            acceuil();
            echo "<p style='color:red;'>Erreur : Catégorie inconnue.</p>";
            break;

    }
}

function ctlAjouterEmploye($nom, $login, $mdp, $categorie){
    try{
        if (!empty($nom)&& !empty($login)&& !empty($mdp)&& !empty($categorie)){
        // Valider les catégories possibles
        $categoriesValides = ['agent', 'conseiller'];
        if (!in_array($categorie, $categoriesValides)) {
            throw new Exception("Catégorie invalide.");}
        //appele de la fonction qui ajoute l'employé dans modele
        ajouterEmploye($nom, $login, $mdp, $categorie);
        echo '<p style="color:green;">Employé ajouté avec succès !</p>';
    } else {
        throw new Exception("Tous les champs doivent être remplis.");
    }
}catch (Exception $e) {
    echo '<p style="color:red;">Erreur : ' . htmlspecialchars($e->getMessage()) . '</p>';
}
}

function ctlAfficherEmployes(){
    try{
        $employes=afficherEmployes();
         if (count($employes) > 0) {
            // Affichage des employés sous forme de liste ou tableau
            echo '<h2>Liste des employés :</h2>';
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Nom</th><th>Catégorie</th></tr>';

            // Parcours du tableau d'employés pour les afficher
        foreach ($employes as $employe) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($employe->numEmploye) . '</td>';
            echo '<td>' . htmlspecialchars($employe->nom) . '</td>';
            echo '<td>' . htmlspecialchars($employe->categorie) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>Aucun employé trouvé.</p>';
    }
    }catch (Exception $e){
        echo '<p style="color:red;">Erreur : ' . htmlspecialchars($e->getMessage()) . '</p>';
    }
}

function ctlConsulterInfEmploye($id){
    if(!empty($id)){
        if(is_numeric($id)){
            $inf=consulterInfEmploye($id);
            if ($inf && is_object($inf)) {  // Vérifie que $inf est un objet valide
                echo '<h2>Informations de l\'employé :</h2>';
                echo '<table border="1">';
                echo '<tr><th>Nom</th><th>Catégorie</th></tr>';
                echo '<tr>';
                echo '<td>' . htmlspecialchars($inf->nom) . '</td>';
                echo '<td>' . htmlspecialchars($inf->categorie) . '</td>';
                echo '</tr>';
                echo '</table>';
            } else {
                echo '<p>Aucun employé trouvé pour l\'ID fourni.</p>';
            }
        }else{
            echo '<p>Ecrivez un nombre correct.</p>';
        }
    }else{
        echo '<p>La case ne doit pas etre vide</p>';
    }
}

function ctlModifierEmploye($id,$login,$mdp){
    try{
    if (!empty($id)&& !(empty($login))&& !empty($mdp)){
        if(is_numeric($id)){
            modifierEmploye($id,$login,$mdp);
            echo '<p style="color:green;">Employé modifié avec succès !</p>';
        }else{
            echo "le id doit etre un nombre";
        }            
        }else {
            throw new Exception("les parametres ne devrait pas etre nul");

    }
}catch (Exception $e) {
    echo '<p style="color:red;">Erreur : ' . htmlspecialchars($e->getMessage()) . '</p>';
}}

function ctlSupprimerEmploye($id){
    try{
    if(!empty($id)){
        if(is_numeric($id)){
            supprimerEmploye($id);
            echo '<p style="color:green;">Employé supprimé avec succès !</p>';
        }else{
            echo "le id doit etre un nombre";}
        }else {
            throw new Exception("les parametres ne devrait pas etre nul"); }
    }catch (Exception $e) {
        echo '<p style="color:red;">Erreur : ' . htmlspecialchars($e->getMessage()) . '</p>';
    }}
?>