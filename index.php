<?php include 'General.php';
?>

<html>
    
    <head>
        
        <link rel="stylesheet" href="Kleurtjes.css">

        <meta charset="UTF-8">
        
        <title>Inlog pagina</title>
        
        
    </head>
    
<body id="index">
    
            
    <div id="inloginput">
        
                
        <form name="inlog" action="inlog.php" method="post" autocomplete="off">
            

            <fieldset>



                        <input type="text" id="input" placeholder="Gebruikersnaam" name="Gebruikersnaam" required>
                        <input type="password" id="input" placeholder="Wachtwoord" name="Wachtwoord" required>
                        <input type="submit" value="Login">



            </fieldset>
                    
        </form>
                
    </div>
    
    
    
  
</body>


</html>