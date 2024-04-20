<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php 
include('db.php'); 
session_start();

if(isset($_POST['register'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Check if username already exists
    $query = "SELECT * FROM users WHERE user_name = '{$username}'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        // Insert new user into the database
        $query = "INSERT INTO users (user_name, pass) VALUES ('{$username}', '{$password}')";
        $insert_result = mysqli_query($conn, $query);

        if($insert_result) {
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            echo "Error: Unable to register. Please try again later.";
        }
    }
}
?>