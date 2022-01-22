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
        if(!isset($_SESSION['user'])){
            header('Location: ./index.php');
        }
    ?>
    <div class="container">
      <div class="sidenav">
        <div class="sidenav__header"><img class="sidenav__logo" src="./assets/logo-light.png" alt="Traumato">
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
          <h2 class="main__title">Patients</h2>
          <form class="main__user" action="php/logout.php" method="POST"> 
            <label class="main__username" for="logout" id="username">John Doe</label>
            <button class="main__username-logout" id="logout" type="submit" name="logout" value="logout">
              <ion-icon name="log-out-outline"></ion-icon>
            </button>
          </form>
        </div>
        <div class="main__content">
          <div class="main__content-header">
            <h3 class="main__subtitle">Tous les Patients </h3>
            <button class="btn">
              <ion-icon name="add-circle-outline"></ion-icon>Ajouter Patient
            </button>
          </div>
          <div class="main__content-body">
            <table class="main__table">
              <thead class="main__table-head">
                <tr class="main__table-row">
                  <th>Nom Complete</th>
                  <th>Date de Naissance</th>
                  <th>Maladie</th>
                  <th>Date Rendez-vous</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="main__table-body">
                <tr class="main__table-row">
                  <td>John Doe</td>
                  <td>May 26, 2019</td>
                  <td>TSPT</td>
                  <td>May 26, 2019</td>
                  <td> 
                    <button class="btn btn--edit" type="button" id="modifier">Modifier</button>
                    <button class="btn btn--delete" type="button" id="modifier">Supprimer</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>