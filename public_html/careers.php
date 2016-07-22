<?php include 'php/detecturl.php'
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <?php
include ('includes/preamble.html');
  ?> 
  
    <title>Careers at Orinoco</title>
<?php
include ('includes/postscript.html');
  ?>  
 </head>
 <body data-spy="scroll" data-target=".navbar-fixed-top" >

  <!-- Header start -->
  <?php
include ('includes/navbar.php');
  ?>
  <!-- Header end -->

  <?php
include ('pages/careers.php');
  ?>

   <?php
include ('includes/footer.php');
  ?>
 </body>
</html>