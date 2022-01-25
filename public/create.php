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
    <?php
        session_start();
        if(!isset($_SESSION['user'])){
            header('Location: ./index.php');
        }
    ?>
    <section class="manage"> <a href="./dashboard.php">
        <button class="btn btn--secondary btn--float" type="button">&larr; Reteur à votre Dashboard</button></a>
      <div class="card">
        <div class="card__header">
          <h3 class="card__title">Crée Patient</h3>
        </div>
        <div class="card__form">
          <form class="form" method="POST" action="">
            <div class="form__group form__group--field">
              <div class="form__group form__group--half">
                <label class="form__label" for="nom">Nom *</label>
                <input class="form__input" type="text" id="nom" name="nom" required>
              </div>
              <div class="form__group form__group--half">
                <label class="form__label" for="prenom">Prénom *</label>
                <input class="form__input" type="text" id="prenom" name="prenom" required>
              </div>
            </div>
            <div class="form__group">
              <label class="form__label" for="tele">Téléphone *</label>
              <input class="form__input" type="text" id="tele" name="tele" required>
            </div>
            <div class="form__group">
              <label class="form__label" for="email">Email *</label>
              <input class="form__input" type="email" id="email" name="email" required>
            </div>
            <div class="form__group">
              <label class="form__label" for="date">Date de Naissance *</label>
              <input class="form__input" type="date" id="date" name="dn" required>
            </div>
            <div class="form__group">
              <label class="form__label" for="maladie">Maladie *</label>
              <select class="form__select" id="maladie" name="maladie" required> 
                <option value="tspt">TSPT</option>
                <option value="camh">CAMH</option>
                <option value="spt">SPT</option>
                <option value="autre">Autre</option>
              </select>
            </div>
            <div class="form__group">
              <label class="form__label" for="rdv">Date de Rendez-vous *</label>
              <input class="form__input" type="date" id="rdv" name="rdv" required>
            </div>
            <div class="form__footer">
              <button class="btn" type="submit" name="create" value="submit">Crée</button>
            </div>
          </form>
        </div>
      </div>
    </section><?php
        require "php/connexion.php";
    
        if (isset($_POST['create'])) {
            $nom = mysqli_real_escape_string($conn, $_POST['nom']);
            $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
            $tele = mysqli_real_escape_string($conn, $_POST['tele']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $date_naissance = mysqli_real_escape_string($conn, $_POST['dn']);
            $maladie = mysqli_real_escape_string($conn, $_POST['maladie']);
            $date_rendezvous = mysqli_real_escape_string($conn, $_POST['rdv']);
    
            $sql_utilisateur = "INSERT INTO utilisateur (nom, prenom, telephone, email, date_naissance, role) VALUES ('$nom', '$prenom', '$tele', '$email', '$date_naissance', 'patient')";
    
            $sql_rdv = "INSERT INTO rdv(date_rdv, maladie, utilisateur_id) VALUES ('$date_rendezvous', '$maladie', LAST_INSERT_ID())";
    
            if ($conn->query($sql_utilisateur) === TRUE && $conn->query($sql_rdv) === TRUE) {
                echo "<script>alert('Votre demande a bien été prise en compte, nous vous recontacterons dans les plus brefs délais.');</script>";
            } else {
                echo "<script>alert('Erreur lors de la création de votre compte, veuillez réessayer.');console.log('Error: '". $sql ."'<br>'". $conn->error.");</script>";
            }
    
            header("Location: ./dashboard.php");
        }
    ?>
  </body>
</html>