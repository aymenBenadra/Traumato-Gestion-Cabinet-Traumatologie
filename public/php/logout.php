<?php
session_start();

if ($_POST['logout'] == "logout") {
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("location: login.php");
}
