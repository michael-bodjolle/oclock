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
<script type="text/javascript">
var attente;
var nombre_qui_change = 0;
var terminer= "terminer" ;
function clearTimeout()
{
      clearInterval(attente);
      nombre_qui_change = terminer;
}
function Timeout(){
    nombre_qui_change = parseInt(nombre_qui_change) - 1;
    
    if (nombre_qui_change < 0) {
      clearTimeout();
    }
      window.document.formulaire.minuteur.value = nombre_qui_change;
      
}
function minutageGo(){
  nombre_qui_change = window.document.formulaire.minuteur.value;
  attente = setInterval(Timeout, 1000);
}




</script>
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
    <h1 id="horloge"></h1>
    <form name="formulaire">
<input type="text" class="fullstyle" name="minuteur" value= 0><br>
<input class="colorbu" type="button" value="Démarrer" onClick="minutageGo();">
<input class="colorbu" type="button" value="Arrêter" onClick="clearTimeout()">
</form>

      </div>
    </main>
</body>

</html>