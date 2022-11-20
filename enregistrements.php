<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" />
        <title>Liste de taches</title>
		
</form>
	<body>
	
	<div class="container">
    <h1>Liste de taches</h1>
	
		<div class="container2">
	<a class="btn btn1" href = "home.php">Accueil</a>
    <a class="btn btn1" href="liste-travaux.php">Saisie des Travaux</a>
    <a class="btn btn1" href="enregistrements.php">Voir enregistrements travaux</a>

	</div>
	<td><?php 

	$dt = new \DateTime();
	$date1=$dt->format('Y-m-d');
	 echo "Date du jour ". $date1 ?></td>
			<table>
  <tr>
    <th>Numero de la tache</th>
	<th>Date de la demande</th>
    <th>Demandeur</th> 
	<th>Secteur</th>
	<th>Equipement</th>
	<th>Description</th>
	<th>Type d'intervention</th>
	<th>Délais d'intervention</th>
	<th>Techniciens</th>
    <th>Etat</th>
  </tr>
  <?php
		$mysqli = new mysqli("localhost", "root", "thuejc", "donnees");
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM travaux";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			?>
  <tr>
    <td><?php echo $ligne['id'] ?></td>
	<td><?php echo $ligne['date'] ?></td>
    <td><?php echo $ligne['demandeur'] ?></td>
    <td><?php echo $ligne['secteur'] ?></td>
	<td><?php echo $ligne['equipement'] ?></td>
	<td><?php echo $ligne['description'] ?></td>
	<td><?php echo $ligne['type_intervention'] ?></td>
    <td > <?php 
	
	//$date1 = "2022-11-10";//date du jour
	if ($ligne['delais']  > $date1)
	echo '<font color="green">' . $ligne['delais'] . '</font><br>';
	else
	echo '<font color="red">' . $ligne['delais'] . '</font><br>';
	?>
</td>
	
	<td><?php echo $ligne['techniciens'] ?></td>
	<td><?php echo $ligne['etat'] ?></td>
  </tr>
  </tr>
  
<?php
			//echo $ligne['id'] . ' ' . $ligne['demandeur'] . ' ' . $ligne['secteur'] . ' ' . $ligne['date'] . ' ' . $ligne['etat'] . '<br>';
		}
		$mysqli->close();
		?>
		</table>
		<a class="btn btn1" href="suppression.php">Suppression</a>
	</div>
	</body> 
</html>