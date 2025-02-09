<?php
require_once('connect.php');

function getConnect(){
    $connexion=new PDO('mysql:host='.SERVEUR.'; dbname='.BDD,USER,PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->query('SET NAMES UTF8');
    return $connexion;
}

function connectEmploye($login,$mdp){
    $connexion=getConnect();
    $requete="SELECT categorie FROM employe WHERE login=:login AND motDePasse=:mdp";
    $stmt=$connexion->prepare($requete);
    // Lier les valeurs aux paramètres
    $stmt->bindParam(':login',$login,PDO::PARAM_STR);
    $stmt->bindParam(':mdp',$mdp,PDO::PARAM_STR);
    $stmt->execute();
    $categorie=$stmt->fetch(PDO::FETCH_OBJ);
    return $categorie;
}

function ajouterEmploye($nom, $login, $motDePasse, $categorie){
    $connexion=getConnect();
    $requete= "INSERT INTO employe(nom, login, motDePasse, categorie) VALUES (:nom, :login, :motDePasse, :categorie)";
    $stmt=$connexion->prepare($requete);
    // Lier les valeurs aux paramètres
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':motDePasse', $motDePasse, PDO::PARAM_STR);
    $stmt->bindParam(':categorie', $categorie, PDO::PARAM_STR);
    $stmt->execute();
}

function afficherEmployes(){
    $connexion=getConnect();
    $requete="SELECT numEmploye, nom, categorie FROM employe";
    $stmt=$connexion->prepare($requete);
    $stmt->execute();
    $employes=$stmt->fetchAll(PDO::FETCH_OBJ);
    return $employes;
}

function consulterInfEmploye($id){
    $connexion=getConnect();
    $requete="SELECT nom, categorie FROM employe WHERE numEmploye=:id";
    $stmt=$connexion->prepare($requete);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();
    $inf=$stmt->fetch(PDO::FETCH_OBJ);
    return $inf;
}

function modifierEmploye($id,$login,$mdp){
    $connexion = getConnect();
    $requete="UPDATE employe SET login=:login , motDePasse=:mdp WHERE numEmploye=:id";
    $stmt=$connexion->prepare($requete);
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':login',$login, PDO::PARAM_STR);
    $stmt->bindParam(':mdp',$mdp, PDO::PARAM_STR);
    $stmt->execute();
}

function supprimerEmploye($id){
    $connexion= getConnect();
    $requete="DELETE FROM employe where numEmploye=:id";
    $stmt=$connexion->prepare($requete);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
}
?>