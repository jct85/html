<?php
 $DB_SERVER="localhost";
 $DB_USERNAME="root";
 $DB_PASSWORD="thuejc";
 $DB_DATABASE="donnees";
 $connection = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
 if(!$connection){
  echo "Error: Unable to connect to mysql";
  echo "Debugging error:"/mysqli_connect_error().php_EOL;
  exit;
 }
 if (isset($_POST['username']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count > 0){ session_start();
$_SESSION['username'] = $username;
header("location: home.php");
}
else{
header("location: index.php?msg=Invalid Login Credentials");
}
}
?>
