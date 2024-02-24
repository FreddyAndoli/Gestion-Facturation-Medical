<?php
include 'connect.php';

$success = ''; // Déclaration de la variable $success pour éviter une erreur potentiellement non définie.

if(isset($_POST['submit'])) {
    // Vérifier si les clés du tableau $_POST existent avant de les utiliser pour éviter les erreurs "Undefined array key"
    if(isset($_POST['pid'], $_POST['dname'], $_POST['age'], $_POST['des'], $_POST['mc'], $_POST['dc'])) {
        // Assigner les valeurs des champs du formulaire à des variables
        $in_pname  = $_POST['pid'];
        $in_dname  = $_POST['dname'];
        $in_age    = $_POST['age'];
        $in_des    = $_POST['des'];
        $in_mc     = $_POST['mc'];
        $in_dc     = $_POST['dc'];

        $invo_date = date("Y-m-d H:i:s");
        // Utilisation des variables directement dans le calcul du total, pas besoin de les entourer de guillemets
        $invo_tot  = (10000 + $in_mc + $in_dc);

        $query = "INSERT INTO `pet_invo`
                  (`invo_Pet_name`, `invo_pet_id`, `invo_pet_age`, `pet_des`, `invo_date`, `medi_charge`, `doc_charge`, `hos_charge`, `total_charge`)
                  VALUES
                  ('$in_dname', '$in_pname', '$in_age', '$in_des', '$invo_date', '$in_mc', '$in_dc', 10000, $invo_tot)";

        if(mysqli_query($con, $query)) {
            $success = '<div align="center" class="alert alert-success">Registration Successful !</div>';
        } else {
            // Gérer l'échec de l'insertion dans la base de données
            $success = '<div align="center" class="alert alert-danger">Registration Failed !</div>';
        }
    } else {
        // Si certaines clés du tableau $_POST ne sont pas définies, afficher un message d'erreur
        $success = '<div align="center" class="alert alert-danger">Some fields are missing!</div>';
    }
}
?>

<!-- Insérer le reste du code HTML ici -->
