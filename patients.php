<?php
// patients.php

// Inclure le fichier de connexion à la base de données
include 'db_connect.php';

// Fonction pour lister tous les patients
function listerPatients() {
    global $conn;

    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn, $query);

    // Afficher les résultats ou les retourner dans un tableau pour un traitement ultérieur
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . ", Nom: " . $row['nom'] . ", Prénom: " . $row['prenom'] . ", Adresse: " . $row['adresse'] . ", Téléphone: " . $row['telephone'] . "<br>";
    }
}

// Fonction pour ajouter un nouveau patient
function ajouterPatient($nom, $prenom, $adresse, $telephone) {
    global $conn;

    $query = "INSERT INTO patients (nom, prenom, adresse, telephone) VALUES ('$nom', '$prenom', '$adresse', '$telephone')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Nouveau patient ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout du patient : " . mysqli_error($conn);
    }
}

// Fonction pour modifier un patient existant
function modifierPatient($id, $nom, $prenom, $adresse, $telephone) {
    global $conn;

    $query = "UPDATE patients SET nom='$nom', prenom='$prenom', adresse='$adresse', telephone='$telephone' WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Patient mis à jour avec succès !";
    } else {
        echo "Erreur lors de la mise à jour du patient : " . mysqli_error($conn);
    }
}

// Fonction pour supprimer un patient
function supprimerPatient($id) {
    global $conn;

    $query = "DELETE FROM patients WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Patient supprimé avec succès !";
    } else {
        echo "Erreur lors de la suppression du patient : " . mysqli_error($conn);
    }
}
?>
