<?php
require "connexion.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id FROM utilisateur WHERE role = '$role' and username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $role, $username and $password, table row must be 1 row
    if ($count == 1) {
        $_SESSION['user'] = $username;

        header("location: dashboard.php");
    } else {
        $error = "Your Username or Password is invalid";
        echo $error;

        header("location: login.html");
    }
}
