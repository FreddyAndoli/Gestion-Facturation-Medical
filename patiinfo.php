<?php include 'lvlauth.php'; ?>
<?php include 'connect.php';?>

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
<link rel="stylesheet" href="css/hide.css">
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

</head>
<body>


<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Gestion Facturation Medical<br /><small style="font-size:20px">Système de gestion hospitalière</small></h1></div>
</div>
</div>
<br><br><br>
<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patin.php"><strong>Inscription des patients</strong></a></li>
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patiinfo.php"><strong>Informations sur les patients</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="petsearch.php"><strong>Recherche de patients</strong></a></li>
<li id="lockk" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadm.php"><strong>Informations sur le patient Modifier et supprimer</strong></a></li>
</ul>
</div></div>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Tous les détails des patients</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:25px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center">En cliquant sur plus d'informations, vous pouvez obtenir des informations sur le médecin canalisé, en cliquant sur Créer une facture, vous pouvez établir une facture de base, en cliquant sur Admite to Hospitol, vous pouvez admettre un patient à l'hôpital.</h4>
<br />

<table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
<thead>
<tr>
<th valign=""><strong>S.No</strong></th>
<th><strong>No d'enregistrement du patient</strong></th>
<th><strong>Nom complet du patient</strong></th>
<th><strong>Informations sur le médecin</strong></th>
<th><strong>Groupe sanguin</strong></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT patient.pet_id,patient.pet_fn,patient.pet_sn,patient.Pet_opdid,patient.pet_bg,staff.smfname,staff.smlname
FROM staff
RIGHT JOIN patient
ON patient.Pet_opdid=staff.staffID ORDER BY `pet_id` DESC";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr valign="middle">
    <td  align="left"><strong><?php echo $count; ?></strong> </td>
    <td  align="left"><?php echo $row["pet_id"]; ?></td>
    <td  align="left"><?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?></td>
    <td  align="left"><?php echo $row["Pet_opdid"]?> | Dr.<?php echo $row["smfname"]?> <?php echo $row["smlname"]?> | <a target="_blank" href="admitdf.php?id= <?php echo $row["Pet_opdid"]; ?>" name="ad"> Plus d'information </a> </td>
	  <td  align="left"><?php echo $row["pet_bg"]; ?></td>
    <td  align="center"><a target="_blank" href="opdinvo.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Faire une facture</a></td>

</tr>

<?php
$count++; } ?>
</tbody>
</table>

</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lockk").style.display = 'none';
}else{
  document.getElementById("lockk").style.display;
}

</script>
</body>
</html>
