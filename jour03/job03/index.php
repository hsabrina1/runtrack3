<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jeu du Taquin - La Plateforme_</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Jeu du Taquin - La Plateforme_</h1>
  <div id="plateau">
    <!-- Les 8 carreaux du puzzle avec des images spécifiques -->
    <div class="carreau" data-position="1"><img src="./image/1.PNG" alt="carreau 1"></div>
    <div class="carreau" data-position="2"><img src="./image/2.PNG" alt="carreau 2"></div>
    <div class="carreau" data-position="3"><img src="./image/3.PNG" alt="carreau 3"></div>
    <div class="carreau" data-position="4"><img src="./image/4.PNG" alt="carreau 4"></div>
    <div class="carreau" data-position="5"><img src="./image/5.PNG" alt="carreau 5"></div>
    <div class="carreau" data-position="6"><img src="./image/6.PNG" alt="carreau 6"></div>
    <div class="carreau" data-position="7"><img src="./image/7.PNG" alt="carreau 7"></div>
    <div class="carreau" data-position="8"><img src="./image/8.PNG" alt="carreau 8"></div>
    <!-- Espace vide -->
    <div class="vide" data-position="9"></div>
  </div>
  <button id="recommencer">Recommencer</button>
  <p id="message"></p>

  <script src="script.js"></script>
</body>
</html>

