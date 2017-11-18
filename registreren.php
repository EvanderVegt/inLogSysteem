<?php

    echo "<br><h3>Onbekende Gebruikersnaam!<br>Kies de knop terug of registreren.</h3><br><br>";
    
    
?>

<head>
    <link rel="stylesheet" href="Kleurtjes.css">
    
         <style>
             
            body{

                background-color: lightsalmon;

                }
                
         </style>
    
</head>

<body>

   
    <div id="plaatsplaatje">
        
     <img src="vraagteken.png" alt="Hier moest een vraagteken plaatje staan" style="width: 100px;">
     
    </div>
    
    
    
    <div id="inputfield">
        
        <form action="index.php" method="post"   >
            
            <button type=submit class="button" >  terug </button>
            
        </form>
   
        <form action="registratie.php" method="post"   >
            
            <button type=submit class="button">  registreren </button>
            
        </form>
        
    </div>
    
</body>