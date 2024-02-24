<?php include 'staffdb.php';?>
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
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
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
</header>
<br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Gestion Facturation Medical<br /><small style="font-size:20px">Système de gestion hospitalière</small></h1></div>

</div>
</div>
<br><br><br>

<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staff.php"><strong>Ajouter un membre du personnel</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staffmemd.php"><strong>Détails des membres du personnels</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="sestaffactmem.php"><strong>Recherche de membres du personnel</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staffactmem.php"><strong>Membres actifs</strong></a></li>
<li id="lock" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmst.php"><strong>Modifications des membres du personnel</strong></a></li>
</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Inscription des membres du personnel</h3></div>
<br />


<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Formulaire d'inscription des membres du personnel</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">Tous les champs sont requis</small>
<div>

<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <input type="hidden" name="dmun" value="<?php echo $_SESSION['sadmun']; ?>" />
  <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input required pattern="[A-Za-z]{1,30}" title="Use Only Letters"  id="fname" name="fname"   type="text" class="form-control" placeholder="Nom">
	</div>
    <div id="fner" class="text-center">
    </div>
	</td>
    </tr>

    <tr>
    <td colspan="2" style="padding:5px">
    <div class="input-group col-md-12 col-xs-12"><input required pattern="[A-Za-z]{1,30}" title="Use Only Letters" name="lname" id="lname"   type="text" class="form-control" placeholder="Prenom">
	</div>
    </td>
  </tr>

  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "><input name="addr"  required="required"  type="text" class="form-control" placeholder="Address"></div></td>
    </tr>

  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "> <span style="border-radius:0px; width:10px" class="input-group-addon" id="basic-addon1">+228</span><input pattern="\d{8,8}"  maxlength="8" title="Valider le numéro de mobile. Utiliser uniquement Les lettres et le nombre de caractères doivent être de 8." name="tel" required  type="tel" class="form-control" placeholder="Numero de Tel" style="border-radius:0px"></div><script type="text/javascript">
document.write('<?php echo $conduperr; ?>');

</script></td>
    </tr>
  <tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 "> <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Email non valide" id="eml" name="email" required  type="email" class="form-control" placeholder="Adress Email" style="border-radius:0px"></div>
	<script type="text/javascript">
   document.write
('<?php echo $emlduperr; ?>');</script></td>
    </tr>
  <tr>
    <td colspan="2" style="padding:5px;"><div class="input-group col-md-12 col-xs-12 "><select name="gender" required="required"  class="form-control" placeholder="Sélectionnez votre sexe">
    <option  value="">Sélectionnez votre sexe   </option>
    <option value="Male">Homme</option>
    <option value="Female">Femme</option>
    </select></div></td></tr>

    <tr>
     <td colspan="2"  style="padding:5px;" >Anniversaire<div class="input-group col-md-12 col-xs-12"><input name="smbdd" required  type="date" class="form-control" placeholder="Birthday"></div></td>
  </tr>

  <tr>
    <td colspan="2" style="padding:5px;"><div class="input-group col-md-12 col-xs-12 "><select name="typesm" required="required"  class="form-control" placeholder="Sélectionnez votre type de personnel">
    <option value="">Type de personnel</option>
    <option value="Doctor">Médecin</option>
    <option value="Nurse">Infirmier(e)</option>
    <option value="Other">Autre</option>
    </select></div></td>
  </tr>
    <tr>
     <td style="padding:5px;" ><div class="input-group col-md-12 col-xs-12"><select name="workt" required="required"  class="form-control">
    <option value="">Temps de travail</option>
    <option value="Morning">Heure du matin</option>
    <option value="Evening">Heure du soir</option>
    <option value="Full">À temps plein</option>
    </select></div>
	<script type="text/javascript">
document.write('<?php echo $gestwterr; ?>');
    </script></td>
  </tr>

  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button   name="submit" type="submit" class="btn" value="SUBMIT">Inscription</button></div></td>
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
<div class="panel-footer text-center">Appuyez sur le bouton Inscription après avoir terminé </div>
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
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admte").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>
</html>
