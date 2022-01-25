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
    <div class="container">
      <div class="sidenav">
        <div class="sidenav__header">
          <button class="btn btn--close-navbar" onclick="toggleNavbar()">&times;</button><img class="sidenav__logo" src="./assets/logo-light.png" alt="Traumato">
          <div class="sidenav__title">Traumato</div>
        </div>
        <div class="sidenav__menu">
          <div class="sidenav__menu-item"><a href="#">
              <ion-icon name="person-circle-outline"></ion-icon>Profile</a></div>
          <div class="sidenav__menu-item sidenav__menu-item--active"><a href="#">
              <ion-icon name="people-outline"></ion-icon>Patients</a></div>
          <div class="sidenav__menu-item"><a href="#">
              <ion-icon name="calendar-outline"></ion-icon>Rendez-vous</a></div>
        </div>
      </div>
      <main class="main"> 
        <div class="main__header"> 
          <button class="btn btn--open-navbar" onclick="toggleNavbar()">&#9776;</button>
          <h2 class="main__title">Patients</h2>
          <form class="main__user" action="" method="POST"> 
            <label class="main__username" for="logout" tooltip="click to logout" id="username"><?php echo $_SESSION['nom']." (".$_SESSION["user"].")"; ?></label>
            <button class="main__username-logout" id="logout" type="submit" name="logout" value="logout">
              <ion-icon name="log-out-outline"></ion-icon>
            </button><?php
            
                if (isset($_POST['logout'])) {
                    session_start();
                    // remove all session variables
                    session_unset();
                    // destroy the session
                    session_destroy();
                    header("location: ./login.php");
                }
            ?>
            
          </form>
        </div>
        <div class="main__content">
          <div class="main__content-header">
            <h3 class="main__subtitle">Tous les Patients </h3><a href="./create.php"> 
              <button class="btn">
                <ion-icon name="add-circle-outline"></ion-icon>Ajouter Patient
              </button></a>
          </div>
          <div class="main__content-body">
            <table class="main__table">
              <thead class="main__table-head">
                <tr class="main__table-row">
                  <th>Nom Complete</th>
                  <th>Date de Naissance</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Maladie</th>
                  <th>Date Rendez-vous</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="main__table-body"></tbody><?php
                  require "php/connexion.php";
                  $sql = "SELECT * FROM Utilisateur as u join rdv on rdv.utilisateur_id = u.id where role='patient'";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='main__table-row'>";
                          echo "<td>".$row['nom']." ".$row['prenom']."</td>";
                          echo "<td>".$row['date_naissance']."</td>";
                          echo "<td>".$row['telephone']."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['maladie']."</td>";
                          echo "<td>".$row['date_rdv']."</td>";
                          echo "<td>";
                              echo "<form action='./modify.php' method='POST'>";
                                  echo "<input type='hidden' name='id' value='".$row['utilisateur_id']."'/>";
                                  echo "<input type='hidden' name='nom' value='".$row['nom']."'/>";
                                  echo "<input type='hidden' name='prenom' value='".$row['prenom']."' />";
                                  echo "<input type='hidden' name='tele' value='".$row['telephone']."' />";
                                  echo "<input type='hidden' name='email' value='".$row['email']."' />";
                                  echo "<input type='hidden' name='dn' value='".$row['date_naissance']."' />";
                                  echo "<input type='hidden' name='maladie' value='".$row['maladie']."' />";
                                  echo "<input type='hidden' name='rdv' value='".$row['date_rdv']."' />";
                                  echo "<button class='btn btn--edit' id='modifier' type='submit' name='action' value='modify'><ion-icon name='brush-outline'></ion-icon></button>";
                              echo "</form>";
                              echo '<button type="button" id="supprimer" class="btn btn--delete"><ion-icon name="trash-outline"></ion-icon></button>';
                          echo "</td>";
                  }
              ?>
            </table>
          </div>
        </div>
      </main>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
      /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
      function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      }
      
      /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
      function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      }
    </script>
  </body>
</html>