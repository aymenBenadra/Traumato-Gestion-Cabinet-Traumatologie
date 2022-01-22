<?php
$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Send mail 
mail("aymanbenadra16@gmail.com", "Traumato Contact Form", $message, "From: $email", "Reply-To: $email");
