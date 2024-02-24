<?php include 'connect.php';?>
<?php include 'invodb.php';?>
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
</head>
<script type="text/javascript" src="js/rightde.js"></script>
<body>
<?php include_once('navbar.php');?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Gestion Facturation Medical<br /><small style="font-size:20px">Système de gestion hospitalière</small></h1></div>

</div>
</div>
<br />


<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patiinfo.php"><strong>Informations sur les patients</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="invoinfo.php"><strong>Factures des Patients</strong></a></li>
</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Facture du patient</h3></div>
<br />


<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Factures des patients</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">Tous les champs sont requis</small>
<div>
  <?php
  require('connect.php');
  $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

if($id === null) {
    // Gérer le cas où 'id' n'est pas défini
    // Par exemple, rediriger l'utilisateur vers une autre page ou afficher un message d'erreur.
}
else {
    // Votre code existant qui utilise $id
}

  $squery = "SELECT * FROM `patient` WHERE `pet_id` ='$id'";
  
  $result = mysqli_query($con, $squery) or die ( mysqli_error($con));
  $row = mysqli_fetch_assoc($result);
  ?>
<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <tr>
    <td colspan="2" style="padding:5px">
      Numéro d'enregistrement du patient:
    <div class="input-group col-md-12 col-xs-12"><input value="<?php echo $row["pet_id"]; ?>" required  name="pid"   type="text" class="form-control" placeholder="Nom du patient">
	</div>
    <div id="fner" class="text-center">
    </div>
	</td>
    </tr>

    <tr>
    <td colspan="2" style="padding:5px">
    Nom complet du patient :
    <div class="input-group col-md-12 col-xs-12"><input value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" required name="dname" id="lname"   type="text" class="form-control" placeholder="Nom du médecin">
	</div>
    </td>
  </tr>
  <tr>

  </tr>
  <tr>
    
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Âge du patient:<input value="<?php echo $row["pet_age"]; ?>" name="age"  required="required"   type="number" class="form-control" placeholder="Age"></div></td>
    </tr>
    <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Maladie:<input  name="des"  required="required"  type="text" class="form-control" placeholder="Maladie"></div></td>
    </tr>
<tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Frais de médicaments<input name="mc"  required="required"   type="number" class="form-control" placeholder="Medicine Charge"></div></td>
    </tr>
<tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Charge du docteur<input name="dc"  required="required"   type="number" class="form-control" placeholder="Doctor Charge"></div></td>
    </tr>
  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button   name="submit" type="submit" class="btn" value="SUBMIT">SOUMETTRE</button></div></td>
    </tr>
<tr><td colspan="2" style="padding:5px">
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>
   </form>
</table>
</div>
</div>
</center>
<div class="panel-footer text-center">Appuyez sur le bouton Soumettre après avoir terminé </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
