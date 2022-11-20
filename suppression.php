<!DOCTYPE html>
<html>
  <head>
    <title>Liste des travaux</title>
  </head>
  
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
  <body>
    <div class="container">
    <h1>Suppression enregistrement</h1>
    <form method="post" action="suppression.php">
      <p> Id : <input type="id" name="id" placeholder="Date de demande"  </p>
      <input type="submit" value="Submit" class="btn btn1"/>
<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "thuejc";
    $database = "donnees";
    
    $date = $_POST["date"]; 
    $demandeur = $_POST["demandeur"];
    $secteur = $_POST["secteur"];
    $equipement = $_POST["equipement"];
    $description = $_POST["description"];
    $delais = $_POST["delais"];
    $etat = $_POST["etat"]; // etat de la tache (en cours , plannifié ,terminée)
    $techniciens=$_POST["techniciens"]; //Nom du technicien
    $type_intervention=$_POST["type_intervention"];// dépannage preventif reparation amelioration
    $temps_prevu=$_POST["temps_prevu"];
    //$photos=$_POST["photos"]; //photos de la tache à faire

    //if (!isset($name)){
     // die("S'il vous plaît entrez votre nom");
    //}
    //if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
     // die("S'il vous plaît entrez votre adresse e-mail");
   // }  
    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    ?>
    
    
      <?php 
      $sql = "DELETE FROM nomTable WHERE id=$id";



    if($sql->execute()){
      print "Enregistrement reussi!!!";

    }else{
      print $mysqli->error; 
    }
   
  }
  ?>
  </div>
   </form>
  </body>
</html>