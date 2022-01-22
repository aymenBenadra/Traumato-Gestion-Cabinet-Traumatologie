<?php
require "connexion.php";

if (isset($_POST['hero-form'])) {
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $tele = mysqli_real_escape_string($conn, $_POST['tele']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date_naissance = mysqli_real_escape_string($conn, $_POST['dn']);
    $maladie = mysqli_real_escape_string($conn, $_POST['maladie']);
    $date_rendezvous = mysqli_real_escape_string($conn, $_POST['rdv']);

    $sql_utilisateur = "INSERT INTO Utilisateur (nom, prenom, telephone, email, date_naissance, role) VALUES ('$nom', '$prenom', '$tele', '$email', '$date_naissance', 'patient')";

    $sql_rdv = "INSERT INTO RDV(date_rdv, maladie, utilisateur_id) VALUES ('$date_rendezvous', '$maladie', (SELECT id FROM Utilisateur WHERE nom = '$nom' and prenom = '$prenom'))";

    if ($conn->query($sql_utilisateur) === TRUE && $conn->query($sql_rdv) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
