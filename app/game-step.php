<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Première étape</title>
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <header>
      <img class="game1__img" src="/img/guillaume-le-conquerant_1024x.webp" alt="guillaume" />
      <img class="game1__logo" src="/img/Geo-removebg-preview.webp" alt="logo" />
    </header>
    <main>
      <p class="box-content box__style" id="game1__txt">
        <img src="/img/question-sm.webp" alt="interrogation" />
      </p>

      <p class="wrong__txt" id="txt__wrong">Presque ! N'abandonnez pas !</p>
      <div class="game__form">
        <input class="game__form-txt" type="text" placeholder="Réponse" id="answer" />
        <button class="game__form-btn btn" type="button" id="submitButton">valider</button>
      </div>

      <div id="correctPopup" class="popup">
        <p class="popup__txt">Bonne réponse bravo !</p>
        <img class="site__img pop__img" src="/img/bravo-sm.webp" alt="" />
        <a class="link" href="middleStep.html">
          <button class="pop__btn btn" id="closeCorrectPopup">suivant</button>
        </a>
      </div>

      <div id="incorrectPopup" class="popup">
        <img class="site__img pop__img" src="/img/detective_interroge-removebg-preview.webp" alt="" />
        <button class="pop__btn btn" id="closeIncorrectPopup">Fermer</button>
      </div>
    </main>
    <footer class="game__footer">
      <button class="game__btn" id="home-button" href="#" onclick="displayPopup('popupk')">accueil</button>
      <div class="popup box__style" id="popupk">
        <p class="popupk__txt">Souhaitez vous vraiment quitter ?</p>
        <img class="popupk__img" src="/img/detective_interroge-removebg-preview.webp" alt="" />
        <div class="popupk__container">
          <a class="link" href="#" onclick="closePopup('popupk')">
            <button class="btn popupk__btn">continuer</button>
          </a>
          <a class="link" href="index.php" onclick="closePopup('popupk')">
            <button class="btn popupk__btn">quitter</button>
          </a>
        </div>
      </div>
      <button class="game__btn" id="showClue" href="#" onclick="displayPopup('popup')">indice</button>
      <div class="popup box__style" id="popup">
        <p class="popup__txt" id="clue"></p>
        <img class="pop__img site__img" src="/img/detective_interroge-removebg-preview.webp" alt="" />
        <a class="link" href="#" onclick="closePopup('popup')">
          <button class="btn pop__btn">fermer</button>
        </a>
      </div>
    </footer>
    <script src="/js/game.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>