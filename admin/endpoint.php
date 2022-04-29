<!-- config file -->
<?php include __DIR__ . '/../config/app.php'; ?>

<?php session_start(); // start session 

?>


<?php

// check if user is signin
if (!isset($_SESSION['signin']) && empty($_SESSION['signin'])) {
    goLocation('../index.php');
}

// check if the user is an admin or student 
$signin = $_SESSION['signin'];
$username = $signin['username'];
$user_type = $signin['user_type'];
?>


<?php

$script = $_SERVER['PHP_SELF'];
$http_method = strtolower($_SERVER['REQUEST_METHOD']);

// initialize global resources 
$database = new DBConnect();
