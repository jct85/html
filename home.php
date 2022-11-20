<?php session_start(); ?><html>
   <head>
      <title>Bienvenue </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/home.css" />
   </head>
   
   <body>
   

      <div class="container">
      <h1>Bonjour <?php echo $_SESSION['username']; ?></h1>
    <a class="btn btn1" href="liste-travaux.php">Saisie des Travaux</a>
    <a class="btn btn2" href="enregistrements.php">Voir enregistrements travaux</a>
    <a class="btn btn3" href="logout.php">Sortir</a>
    <!--<a class="btn btn4">Hover Me</a>-->
  </div>
   
   </body>
</html>