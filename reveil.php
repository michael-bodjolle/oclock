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

        

            <div class="container">
                <h1 id="timer"></h1>

                <select id="hours"></select>
                <select id="minutes"></select>
                <select id="seconds"></select>
                
                
                <div>
                    <button id="startstop">regler l'alarme</button>
                </div>

            </div>
        
    </main>
    <script src="js/reveil.js"></script>
</body>

</html>