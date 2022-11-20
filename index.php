<?php
 if(isset($_GET['msg'])){
  echo "<script>alert('Oops that did not match, please try again')</script>";
 }
?><!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP MySQL Login System</title>
 <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
 <style type="text/css">
  body{
   font-family: 'Solway', serif;
  }
  h3{
   color: #1E90FF;
  }
  .main{
   margin: 180px 500px;
   width: 250px;
   padding: 30px;
   min-height: 100px;
   background-color: rgb(238,238,238);
   text-align: center;
   border-radius: 2px;
   box-shadow: 0.5px 1px 7px 0.5px;
  }
  .form{
   line-height: 2.5em;
   letter-spacing: 0.03em
  }
  .form input{
   height: 20px;
   border-left: 0px;
   border-right: 0px;
   border-top: 0px;
  }
  .button {
   padding:3px;
      height: 25px;
      background-color: #1E90FF;
      border: none;
      color: white;
     text-align: center;
     text-decoration: none;
     font-size: 16px;
     margin: 4px 2px;
     cursor: pointer;
  }
 </style>
</head>
<body>
 <div class="main">
  <h3>Login form</h3>
  <form action="login.php" method="POST" class="form">
   <label>Username</label>
   <input type="text" class="text" name="username">
   <label>Password</label>
   <input type="password" class="text" name="password">
   <button class="button">Login</button>
  </form>
 </div>
</body>
</html>