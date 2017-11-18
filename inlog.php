<?php include 'General.php'; ?>

<?php

$conn = connectionDB();

if (isset($_POST['Gebruikersnaam'])) {

    $sql = "INSERT INTO `inlog`(`Gebruikersnaam`, `Wachtwoord`)VALUES('" . $_POST['Gebruikersnaam'] . "','" . $_POST['Wachtwoord'] . "')";

    $conn->query($sql);
}



if (isset($_POST['Gebruikersnaam'])) {

    $Gebruikersnaam = $_POST['Gebruikersnaam'];
    $Wachtwoord = $_POST['Wachtwoord'];

    $sql = "SELECT * FROM `inlog` WHERE `Gebruikersnaam`='" . $Gebruikersnaam . "'AND `Wachtwoord`='" . $Wachtwoord . "'";

    $result = $conn->query($sql);

    $num = mysqli_num_rows($result);


    
    
    switch ($num) {

        case $num == 1;
            $registreren = 'registreren.php';
            header("location: $registreren");
            break;

        case $num != 1;
            $welkom = 'welkom.php';
            header("location: $welkom");
            break;
    }
}
?>


