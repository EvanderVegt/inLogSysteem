<?php include 'General.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inlog pagina</title>
    </head>
    <body>
        <form name="inlog" action="inlog.php" method="get" autocomplete="off">

            <fieldset>



                <input type="text" placeholder="Gebruikersnaam" name="Gebruikersnaam" required>
                <input type="text" placeholder="Wachtwoord" name="Wachtwoord" required>
                <input type="submit" value="Login">



            </fieldset>
        </form>
        <?php
        
   
        ?>
    </body>
</html>
