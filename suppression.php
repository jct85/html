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
    <div class="container">
        
		<div class="container2">
		<a class="btn btn1" href = "home.php">Accueil</a>
    <a class="btn btn1" href="liste-travaux.php">Saisie des Travaux</a>
    <a class="btn btn1" href="enregistrements.php">Voir enregistrements travaux</a>

	</div>
    <form method="post" action="test.php">
      <p> Id : <input type="id" name="id" placeholder="Numero de la tache"  </p>
      <input type="submit" value="Supprimer" class="btn btn1"/>
<?php
$servername = "localhost";
$username = "root";
$password = "thuejc";
$dbname = "donnees";
$id = $_POST["id"];
// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verifier la connexion
if (!$conn) {
  die("La Connexion a échouée: " . mysqli_connect_error());
}

//Requête SQL pour supprimer un enregistrement
$sql = "DELETE FROM travaux WHERE id=$id";
?>
<tr>
<tr> 
<?php     
if (mysqli_query($conn, $sql)) {
  echo "Enregistrement " .$id. " supprimé avec succés";
} //else {
  //echo "Erreur lors de la suppression : " .mysqli_error($conn);
//}

mysqli_close($conn);
?>
  </div>

   </form>
  </body>
</html>