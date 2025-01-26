<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
  require_once('Controleur/controleur.php');

  if (isset($_POST['envoyer'])){
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    
    ctlConnectEmploye($login, $mdp);
  }else if (isset($_POST['ajouterEmploye'])){
    $nom=$_POST['nom'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $categorie= $_POST['categorie'];

    ctlAjouterEmploye($nom, $login, $mdp, $categorie);

  }else if (isset($_POST['afficherEmployes'])){
    ctlAfficherEmployes();
  }
  else if(isset($_POST['informationEmploye'])){
    $id=$_POST['id'];
    ctlConsulterInfEmploye($id);
  }
  else if (isset($_POST['modifierEmploye'])){
    $id=$_POST['id'];
    $login=$_POST['login'];
    $mdp=$_POST['motDePasse'];
    ctlModifierEmploye($id,$login,$mdp);
  }
  else if (isset($_POST['supprimerEmploye'])){
    $id=$_POST['id'];
    ctlSupprimerEmploye($id);
  }
  else {
    Acceuil();
  }
?>