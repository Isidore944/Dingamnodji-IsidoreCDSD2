<?php
// rendezvous.php

// Inclure le fichier de connexion à la base de données
include 'db_connect.php';

// Fonction pour enregistrer un rendez-vous
function enregistrerRendezVous($date, $heureDebut, $heureFin, $etat, $patient_id, $presentation_id) {
    global $conn;

    $query = "INSERT INTO rendez_vous (date, heureDebut, heureFin, etat, patient_id, presentation_id) VALUES ('$date', '$heureDebut', '$heureFin', '$etat', $patient_id, $presentation_id)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Nouveau rendez-vous enregistré avec succès !";
    } else {
        echo "Erreur lors de l'enregistrement du rendez-vous : " . mysqli_error($conn);
    }
}

// Fonction pour lister tous les rendez-vous
function listerRendezVous() {
    global $conn;

    $query = "SELECT * FROM rendez_vous";
    $result = mysqli_query($conn, $query);

    // Afficher les résultats ou les retourner dans un tableau pour un traitement ultérieur
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . ", Date: " . $row['date'] . ", Heure de début: " . $row['heureDebut'] . ", Heure de fin: " . $row['heureFin'] . ", État: " . $row['etat'] . ", Patient ID: " . $row['patient_id'] . ", Présentation ID: " . $row['presentation_id'] . "<br>";
    }
}
?>
