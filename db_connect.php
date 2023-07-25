<?php
// Remplacez les informations suivantes par vos propres informations de connexion à la base de données
$servername = "localhost";
$username = "Dingamnodji_Isidore";
$password = "Acounamatata944";
$dbname = "consult_bd";

// Établir la connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}
?>
