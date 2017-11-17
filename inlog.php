<?php include 'General.php'; ?>

<?php
$conn=connectionDB();
if (isset($_GET['Gebruikersnaam'])) {
    $sql = "INSERT INTO `inlog`(`Gebruikersnaam`, `Wachtwoord`)VALUES('" . $_GET['Gebruikersnaam'] . "','" . $_GET['Wachtwoord'] . "')";
    $conn->query($sql);
}
?>
