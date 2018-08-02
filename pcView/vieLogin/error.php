<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>خطأ</title>
  <?php include 'css/css.html'; ?>
  <style type="text/css">
    body{
      background-image: url(img/background.png);
      background-size: cover;
      
    }
  </style>
</head>
<body>
<div class="form">
    <h1>خطأ</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="button button-block"/>اعد المحاولة</button></a>
</div>
</body>
</html>
