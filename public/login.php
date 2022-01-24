<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="./css/style.min.css">
    <!-- Favicon: src\pug\partials\favicon.pug-->
    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/public/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/public/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/public/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Primary Meta Tags-->
    <title>Traumato - Cabinet Traumatologie</title>
    <meta name="title" content="Traumato - Cabinet Traumatologie">
    <meta name="description" content="Le docteur Rahbani Rafik est un traumatologue qui souhaite renforcer sa présence sur le web et informatiser la gestion de ses patients.">
    <!-- Open Graph / Facebook-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Traumato - Cabinet Traumatologie">
    <meta property="og:description" content="Le docteur Rahbani Rafik est un traumatologue qui souhaite renforcer sa présence sur le web et informatiser la gestion de ses patients.">
    <meta property="og:image" content="../assets/hero.jpg">
    <!-- Twitter-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Traumato - Cabinet Traumatologie">
    <meta property="twitter:description" content="Le docteur Rahbani Rafik est un traumatologue qui souhaite renforcer sa présence sur le web et informatiser la gestion de ses patients.">
    <meta property="twitter:image" content="../assets/hero.jpg">
  </head>
  <body>
    <section class="login"> <a href="./index.php">
        <button class="btn btn--secondary btn--float" type="button">&larr; Reteur à l'Accueil</button></a>
      <div class="card">
        <div class="card__header"><img class="card__logo" src="./assets/logo.png" alt="Traumato Logo">
          <h3 class="card__brand">Traumato</h3>
          <p class="card__desc">enterer votre username et mot de passe</p>
        </div>
        <div class="card__form">
          <form class="form" id="loginForm" action="" method="POST">
            <fieldset class="form__fieldset">
              <legend class="form__legend">Type de Compte</legend>
              <input class="form__input" type="radio" id="medecin" name="type" value="medecin" checked>
              <label class="form__label" for="medecin">Medecin</label>
              <input class="form__input" type="radio" id="admin" name="type" value="admin" disabled>
              <label class="form__label" for="admin">Admin</label>
            </fieldset>
            <div class="form__group">
              <label class="form__label" for="username">Username </label>
              <input class="form__input" type="text" id="username" name="username" required>
            </div>
            <div class="form__group">
              <label class="form__label" for="password">Password</label>
              <input class="form__input" type="password" id="password" name="password" required>
            </div>
            <button class="btn" type="submit">Log in</button>
          </form>
        </div>
      </div>
    </section><?php
        //- session_start();
        //- if (isset($_SESSION['user'])){
        //-     header('Location: ./dashboard.php');
        //- }
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require "php/connexion.php";
            
            // username and password sent from form 
            //- $role = mysqli_real_escape_string($conn, $_POST['role']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
    
            //- $sql = "SELECT * FROM utilisateur WHERE role = '$role' and username = '$username' and password = '$password'";
            $sql = "SELECT * FROM utilisateur WHERE username = '$username' and password = '$password' LIMIT 1";
    
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
            $count = mysqli_num_rows($result);
    
            // If result matched $role, $username and $password, table row must be 1 row
            if ($count == 1) {
                session_start();
                $_SESSION['user'] = $username;
                $_SESSION['nom'] = $row['prenom']." ".$row['nom'];
                $_SESSION['specialite'] = $row['specialite'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['tele'] = $row['telephone'];
                //- print_r($_SESSION);
                //- echo "<script>alert('Username ou mot de passe correct!(".$_SESSION['nom']." | ".$password.").')</script>";
    
                header("location: ./dashboard.php");
            } else {
                echo "<script>alert('Username ou mot de passe incorrect!')</script>";
            }
        }
    ?>
  </body>
</html>