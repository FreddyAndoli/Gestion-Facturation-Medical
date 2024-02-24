<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/print.css" media="print">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Gestion Facturation Medical</title>
    <script type="text/javascript" src="js/rightde.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
    <?php
    require('connect.php');
    $id=$_REQUEST['id'];
    $ide=$_REQUEST['id'];
    $query = "SELECT * FROM `pet_invo` WHERE `invo_id`='$id'";
    $result = mysqli_query($con, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);

    $querye = "SELECT `pet_em` FROM `patient` WHERE `pet_id`='$ide'";
    $resulte = mysqli_query($con, $querye) or die ( mysqli_error());
    $rowe = mysqli_fetch_assoc($resulte);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 ">
                <h1 class="text-center ">Gestion Facturation Medical<br /><small style="font-size:20px">Facture patient</small></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="" action="" method="post" id="upform">
                    <input type="hidden" name="new" value="1" />
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center"><strong>Numéro de facture: <?php echo $row["invo_id"]; ?></strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><strong>Date de la facture : <?php echo $row["invo_date"]; ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Numéro d'enregistrement du patient :</strong></td>
                            <td><strong><?php echo $row["invo_pet_id"]; ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Nom complet du patient :</strong></td>
                            <td><strong><?php echo $row["invo_Pet_name"]; ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Âge du patient :</strong></td>
                            <td><strong><?php echo $row["invo_pet_age"]; ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Maladie :</strong></td>
                            <td><strong><?php echo $row["pet_des"]; ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Prix des médicaments :</strong></td>
                            <td><strong>Frc. <?php echo $row["medi_charge"]; ?>.00</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Prix pour les médecins :</strong></td>
                            <td><strong>Frc. <?php echo $row["doc_charge"]; ?>.00</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Frais de service :</strong></td>
                            <td><strong>Frc. <?php echo $row["hos_charge"]; ?>.00</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Prix Total :</strong></td>
                            <td><strong>Frc. <?php echo $row["total_charge"]; ?>.00</strong></td>
                        </tr>
                    </table>
                    <br>
                    <button class="hidden-print" name=submit type="button" onclick="formPrint()">Imprimer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function formPrint() {
            window.print();
        }
    </script>
</body>
</html>
s