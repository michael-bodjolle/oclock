<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
  <title>index</title>
</head>

<body>
  <header>

    <div class="color">
      <ul class="navlist">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="horloge.php">horloge</a></li>
        <li><a href="minuteur.php">Minuteur</a></li>
        <li><a href="chronometre.php">Chronometre</a></li>
        <li><a href="reveil.php">Reveil</a></li>
      </ul>
  </header>
  <main>

    <div class="control">
  
      <h1 class="timer">
        <span class="minutes">00</span> :
        <span class="seconds">00</span> .
        <span class="milliseconds">000</span>
      </h1>
      
      <div class="bottomPart">
        <div class="btns">
          <button  class="reset">Reset</button>
          <button  class="toggle">Start</button>
          <button  class="lap">Lap</button>
        </div>
<ol class=" lap_box"></ol>
      </div>
    </div>
    <script src="js/stopwatch.js"></script>
    <script src="js/script.js"></script>
    </div>
  </main>

</body>

</html>