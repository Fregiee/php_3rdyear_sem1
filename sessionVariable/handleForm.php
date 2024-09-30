<?php 

session_start();

// Check if submitBtn exists
if(isset($_POST['login'])) {

    // Check if a user is already logged in
    if(isset($_SESSION['firstName'])) {
       
        header('Location: index.php?error=user_logged_in');
        exit(); // Stop further execution
    }

    // Get the first name and password
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']);

    // Set the session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

    // Redirect back to the index page
    header('Location: index.php');
    exit();
}

?>
