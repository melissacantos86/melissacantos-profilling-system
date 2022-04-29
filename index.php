 <!-- app init -->
 <?php include(__DIR__ . '/config/app.php'); ?>

 <!-- start new session -->
 <?php session_start(); ?>


 <?php

  // request method
  $method = strtolower($_SERVER['REQUEST_METHOD']);

  // current executed script
  $script = $_SERVER['PHP_SELF'];


  if (isset($_SESSION['signin']) && $_SESSION['signin']['is_signin'] === true) {
    goLocation('./admin/index.php');
  }

  ?>

 <!-- header -->
 <?php include($_PATH['front']['header']); ?>

 <!-- wrapper -->
 <div class="wrapper">

   <!-- home -->
   <?php include($_PATH['front']['pages'] . '/__home.php'); ?>

   <!-- about -->
   <?php include($_PATH['front']['pages'] . '/__about.php'); ?>

   <!-- copyright -->
   <?php include($_PATH['front']['pages'] . '/__copyright.php'); ?>

   <!-- footer -->
   <?php include($_PATH['front']['footer']); ?>

 </div>