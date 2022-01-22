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
    <header class="header">
      <div class="header__brand"> <img class="header__logo" src="./assets/logo-light.png" alt="Traumato">
        <h4 class="header__text">Traumato</h4>
      </div><a href="./login.html"> 
        <button class="btn" id="loginBtn" type="button">Login &rarr;</button></a>
    </header>
    <section class="hero">
      <div class="hero__filter"></div>
      <div class="hero__content">
        <div class="hero__left-content">
          <h1 class="hero__title">Meet the best Hospital</h1>
          <p class="hero__subtitle">We know how large objects will act, but things on a small scale.</p>
          <div class="hero__cta"><a class="link-active" href="#location"> 
              <button class="btn btn--secondary" type="button">
                 Location Cabinet</button></a><a href="#contact"> 
              <button class="btn" type="button">
                 Contactez nous!</button></a></div>
        </div>
        <div class="hero__right-content">
          <div class="card">
            <div class="card__header">
              <h3 class="card__title">Crée Patient</h3>
            </div>
            <div class="card__form">
              <form class="form" method="POST" action="php/reservation.php">
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
                  <button class="btn" type="submit" name="hero-form" value="submit">Crée</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="location" id="location">
      <div class="location__header">
        <h2 class="location__title">Location de Cabinet </h2>
        <p class="location__subtitle">Problems trying to resolve the conflict between <br>the two major realms of Classical physics: Newtonian mechanics </p>
      </div>
      <div class="location__map"> 
        <div id="map"> </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="contact__header">
        <h2 class="contact__title">Get in Touch</h2>
        <p class="contact__subtitle">The gradual accumulation of information about atomic and small-scale behaviour during the first quarter of the 20th century</p>
      </div>
      <div class="contact__form">
        <div class="card">
          <div class="card__header">
            <h3 class="card__title">Contactez nous</h3>
          </div>
          <div class="card__form">
            <form class="form" action="" method="post">
              <div class="form__left">
                <div class="form__group">
                  <label class="form__label" for="nom">Nom Complete *</label>
                  <input class="form__input" type="text" id="nom" name="nom" required>
                </div>
                <div class="form__group">
                  <label class="form__label" for="email">Email *</label>
                  <input class="form__input" type="email" id="email" name="email" required>
                </div>
              </div>
              <div class="form__right">
                <div class="form__group">
                  <label class="form__label" for="message">Message *</label>
                  <textarea class="form__textarea" name="message" id="message" cols="30" rows="6" required></textarea>
                </div>
              </div>
              <div class="form__footer">
                <button class="btn" type="submit" name="contact" value="submit">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="./assets/js/contact.js"></script><?php
        if(isset($_POST['contact'])){
            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
    
            // Send mail 
            mail("aymanbenadra16@gmail.com", "Traumato Contact Form", $message, "From: $email", "Reply-To: $email");
        }
    ?>
    
    <footer class="footer">
      <p class="footer__text">Made With ❤️ By Mohammed-Aymen Benadra<br>©Traumato - All rights reserved.</p>
    </footer>
    <script src="./assets/js/contact.js"></script>
    <!-- map script-->
    <!-- script(src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async)-->
    <!-- script(src="./js/location.min.js") -->
  </body>
</html>