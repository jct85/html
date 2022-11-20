<!DOCTYPE html>
<html>
  <head>
    <title>Liste des travaux</title>
  </head>
  
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
  <body>
    <div class="container">
    <h1>Enregistrement demande intervention</h1>
    <div class="container2">
    <a class="btn btn1" href = "home.php">Accueil</a>
    <a class="btn btn1" href="liste-travaux.php">Saisie des Travaux</a>
    <a class="btn btn1" href="enregistrements.php">Voir enregistrements travaux</a>
 </div>
 <td><?php
	$dt = new \DateTime();
	$date1=$dt->format('Y-m-d');
	 echo "Date du jour ". $date1 ?>
  </td>
    <form method="post" action="control.php">
      <p> Date : <input type="date" name="date" placeholder="Date de demande"  </p>
      <p> Demandeur : <input type="Text" name="demandeur" placeholder="Nom du demandeur" </p>
      <p>Secteur : <input type="Text" name="secteur" placeholder="Secteur d'intervention"</p> 
      <p class= "G_zone"> Equipement : <input type="Text" name="equipement" placeholder="Nom ou reference de l'equipement"
      required minlength="4" maxlength="35" size="35"</p>
      <p class= "G_zone"> Description : <input type="Text" name="description" placeholder="Description de l'intervention" 
      required minlength="4" maxlength="35" size="35"</p>
      <p class= "P_zone"> 
        Type d'intervention: <select name="type_intervention" >
          <option value="Depannage">Depannage</option>
          <option value="Réparation">reparation</option>
          <option value="Preventif">preventif</option>
          </select> </p>                                        
      <p class= "P_zone"> Delais : <input type="date" name="delais" placeholder="Date des travaux"
      required minlength="4" maxlength="35" size="35"</p>
      <p class= "P_zone">Temps prévu : <input type="Text" name="temps_prevu" placeholder="Temps des travaux"
      required minlength="4" maxlength="35" size="35"</p>
      <p class= "P_zone">Techniciens : <input type="Text" name="techniciens" placeholder="Nom du technicien"
      required minlength="4" maxlength="35" size="35"</p>
      <!--<p class= "P_zone"> Etat : <input type="Text" name="etat" placeholder="ok ou nonok"
      required minlength="3" maxlength="35" size="35"</p>-->
  
      Etat : <select name="etat" >
      <option value="En attente">1 en attente</option>
      <option value="Plannifié">2 plannifié</option>
      <option value="En cours">3 en cours</option>
      <option value="Terminée">4 terminée</option>
      </select>

      <input type="submit" value="Enregistrer" class="btn btn1"/>
    </div>
    </form>
  </body>
</html>
