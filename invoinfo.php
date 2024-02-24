
<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Gestion Facturation Medical</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Gestion Facturation Medical<br /><small style="font-size:20px">Système de gestion hospitalière</small></h1></div>
</div>
</div><br><br><br>
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="invoinfo.php"><strong>Factures des patients</strong></a></li>

</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Toutes les factures des patients</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:10px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center">En cliquant sur Afficher, vous pouvez visualiser ou imprimer la facture du patient.</h4>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Facture.Id</strong></th>
<th><strong>Num enregistrement patient</strong></th>
<th><strong>Date</strong></th>
<th><strong>Nom du patient</strong></th>
<th><strong>Maladie</strong></th>
<th><strong>Charge du docteur</strong></th>
<th><strong>Frais de médecine</strong></th>
<th><strong>Frais d'hôpital</strong></th>

<th><strong>Total Charge</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `pet_invo` ORDER BY `invo_id` DESC ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["invo_id"]; ?></td>
    <td align="center"><?php echo $row["invo_pet_id"]; ?> </td>
    <td align="center"><?php echo $row["invo_date"]; ?> </td>
    <td align="center"><?php echo $row["invo_Pet_name"]; ?></td>
    <td align="center"><?php echo $row["pet_des"];?></td>
    <td align="center">Frc. <?php echo $row["doc_charge"]; ?> </td>
    <td align="center">Frc. <?php echo $row["medi_charge"]; ?> </td>
    <td align="center">Frc. <?php echo $row["hos_charge"]; ?> </td>
    <td align="center">Frc. <?php echo $row["total_charge"]; ?></td>
    <td align="center"><a target="_blank" href="printopd.php?id=<?php echo $row["invo_id"]; ?> & ide=<?php echo $row["invo_pet_id"]; ?>" name="ad">Verifier</a></td>


</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div></div>

</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
</html>
