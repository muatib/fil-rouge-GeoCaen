<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GeoCean jeux</title>
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <header class="header__container">
      <img
        class="header__img"
        src="/img/logovillecaenndie_2016-removebg-preview.webp"
        alt="enqueteur"
      />
      <img
        class="header__logo main__img"
        src="/img/Geo-removebg-preview.webp"
        alt="logo GeoCaen"
      />

      <div class="menu__toggle" id="burger__menu">
        <span class="menu__toggle-bar"></span>
      </div>
      <nav id="menu">
        <ul class="menu__container">
          <li class="menu__container-itm">
            <a class="menu__container-lnk link" href="index.php">Accueil</a>
          </li>

          <li class="menu__container-itm">
            <a class="menu__container-lnk" href="#">A propos de GeoCaen</a>
          </li>
          <li class="menu__container-itm">
            <a class="menu__container-lnk" href="#">Nous contacter</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <h2 class="game__ttl">
        <span class="txt__red">Bienvenue</span> enquêteur ! <br />
        Choisissez le mystère à <span class="txt__blue">percer</span>
      </h2>
      <p class="game__txt"><span class="txt__red">(</span> Cliquez sur l'image pour accéder au jeu <span class="txt__red">)</span></p>
      <div class="game">
        <h3>Les trésors cachés de <br> Guillaume le <span class="txt__gold">Conquérant</span></h3>
        <a href="game-step.php"><img
          class="game__img1 game__img"
          src="/img/guillaume-le-conquerant2.webp"
          alt="guillaume le conquérant"
        /></a>
        <h3>Les pouvoirs de la reine <span class="txt__purple">Mathilde</span></h3>
        <a href="#"><img
          class="game__img2 game__img"
          src="/img/mathilde2.webp"
          alt="reine Mathilde"
        /></a>
        <h3>L'héritage des <span class="txt__red">vikings</span></h3>
        <a href="#"><img class="game__img3 game__img" src="/img/viking.webp" alt="viking" /></a>
      </div>
      
      <img
        class="game__img4"
        src="/img/famille detective-sm.webp"
        alt="famille detective"
      />
    </main>

    <footer class="footer">
      <div class="footer__txt">
        <p>infos contact</p>
        <p>Suivez notre actualité :</p>
        <p>
          <span class="txt__blue">Geo</span
          ><span class="txt__red">Caen</span> tout droits réservés
        </p>
      </div>
      <ul class="footer__icn">
        <li>
          <img
            class="footer__icn-img"
            src="/img/facebook-square-svgrepo-com.svg"
            alt="facebook"
          />
        </li>

        <li>
          <img
            class="footer__icn-img"
            src="/img/twitter-svgrepo-com.svg"
            alt="twitter"
          />
        </li>
        <li>
          <img
            class="footer__icn-img"
            src="/img/instagram-1-svgrepo-com.svg"
            alt="instagram"
          />
        </li>
      </ul>
    </footer>

    <script src="/js/main.js"></script>
  </body>
</html>
