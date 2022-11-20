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
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO travaux (date,demandeur,secteur,equipement,description,delais,etat,techniciens,type_intervention,temps_prevu) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ssssssssss', $date, $demandeur, $secteur, $equipement, $description, $delais, $etat,$techniciens,$type_intervention,$temps_prevu); 
    
    if($statement->execute()){
      print "Enregistrement reussi!!!";
    }else{
      print $mysqli->error; 
    }
  }
  ?>
  <table class="taches">
    <tr>
        <th>
            N
        </th>
        <th>
            Dates
        </th>
        <th>
            Demandeur
        </th>
        <th>
            Secteur
        </th>
        <th>
            equipement
        </th>
        <th>
            description travaux
        </th>
        <th>
            Type de travaux
        </th>
        <th>
            delais
        </th>
        <th>
            Etat
        </th>
        <th>
            Technciens
        </th>
        <th>
            Temps prévu
        </th>
    </tr>
    <?php
    $reponse = $db->query('Select * from travaux'); // On exécute une requête visant à récupérer les tâches atention prévoir filtre
    while ($taches = $reponse->fetch()) { // On initialise une boucle
        ?>
        <tr>
            <td><?php echo $taches['id'] ?></td>
            <td><?php echo $taches['Date'] ?></td>
            <td><?php echo $taches['demandeur'] ?></td>
            <td><?php echo $taches['secteur'] ?></td>
            <td><?php echo $taches['equipement'] ?></td>
            <td><?php echo $taches['description travaux'] ?></td>
            <td><?php echo $taches['type_intervention'] ?></td>
            <td><?php echo $taches['delais'] ?></td>
            <td><?php echo $taches['etat'] ?></td>
            <td><?php echo $taches['techniciens'] ?></td>
            <td><?php echo $taches['temps_prevu'] ?></td>
            
            <!--<td><a class="suppr" href="todo-new.php?supprimer_tache="> X</a></td>-->
        </tr>
        <?php
    }
 
 
    ?>
 
 
</table>
