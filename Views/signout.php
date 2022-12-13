<?php session_start(); ?>
<?php include '../Controller/CustomerC.php'; ?>
<?php 
$customerC = new CustomerC();
 // set isLoggedIn to false
  $customerC->isLoggedIn($username,$Password);
  session_destroy();
  header('Location: ../index.php');
  exit();
?>


