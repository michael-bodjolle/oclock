<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    <title>horloge</title>
</head>

<body onload=showDate();>
    
   
      <script type="text/javascript"> 
         function refresh(){
             var t = 1000; // rafraîchissement en millisecondes
             setTimeout('showDate()',t)
         }
         
         function showDate() {
             var date = new Date()
             var h = date.getHours();
             var m = date.getMinutes();
             var s = date.getSeconds();
             if( h < 10 ){ h = '0' + h; }
             if( m < 10 ){ m = '0' + m; }
             if( s < 10 ){ s = '0' + s; }
             var time = h + ':' + m + ':' + s
             document.getElementById('horloge').innerHTML = time;
             refresh();
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
     </div>
   </header>
   <main onload=showDate();>
       <div class="control">
      <p id="horloge" ></p>
      </div>
        </main>
 
    
</body>

</html>