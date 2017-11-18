<?php
    include 'General.php';


    echo "<h3 name=text>Registratieformulier</h3>";
    

    $conn = connectionDB();
?>


<html>
    <head>
       <link rel="stylesheet" href="Kleurtjes.css">

            <style>
                
            body{

                 background-color: lightcyan;

                } 
           </style>
           
              <meta charset="UTF-8">
              
                  <title>Registratie pagina</title>
    </head>
    
          <body>
              
              
              <div id="inloginput">
              
             <form name="registratie" action="registratie.php" method="post" autocomplete="off">

                <fieldset>



                <input type="text" id="input" placeholder="Gebruikersnaam" name="Gebruikersnaam" required>
                <input type="password" id="input" placeholder="Wachtwoord" name="Wachtwoord" required>
                <input type="submit" value="Login">



                </fieldset>
                 
             </form>
                  
            </div>

    </body>
</html>


<?php

if (isset($_POST['Gebruikersnaam'])) {

    $sql = "INSERT INTO `inlog`(`Gebruikersnaam`, `Wachtwoord`)VALUES('" . $_POST['Gebruikersnaam'] . "','" . $_POST['Wachtwoord'] . "')";

    // $conn->query($sql);




    if (isset($_POST['Gebruikersnaam'])) {

        $Gebruikersnaam = $_POST['Gebruikersnaam'];
        $Wachtwoord = $_POST['Wachtwoord'];

        $sql = "SELECT * FROM `inlog` WHERE `Gebruikersnaam`='" . $Gebruikersnaam . "'AND `Wachtwoord`='" . $Wachtwoord . "'";

        $result = $conn->query($sql);

        $num = mysqli_num_rows($result);




        switch ($num) {

            case $num != 1;
                $registreren = 'registreren.php';
                header("location: $registreren");
                break;

            case $num == 1;
                $welkom = 'welkom.php';
                header("location: $welkom");
                break;
        }
    }
}
?>
