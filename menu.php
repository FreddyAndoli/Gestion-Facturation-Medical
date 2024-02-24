<?php include ('lvlauth.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/hide.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="js/rightde.js"></script>
<title>Gestion Facturation Medical</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>

<header class="nav-down ">
    <?php include_once('navbar.php');?>
</header>

<main>
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center "><img width="9%" src="images/logol.png">Gestion Facturation Medical<br /><small style="font-size:20px">Système de gestion hospitalière</small></h1>
            <hr width="250px">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <table class="table table-bordered" width="auto" border="0">
                    <tr>
                        <td>
                            <a href="patin.php">
                                <img src="images/menu/pdinfo.jpg"
                                     class="img-responsive img-thumbnail"
                                     onMouseOver="src='images/menu/pinfo.jpg'"
                                     onMouseOut="src='images/menu/pdinfo.jpg'"
                                     id="picture" />
                            </a>
                        </td>
                        <td>
                            <a href="staff.php">
                                <img src="images/menu/sdinfo.jpg"
                                     class="img-responsive img-thumbnail"
                                     onMouseOver="src='images/menu/sinfo.jpg'"
                                     onMouseOut="src='images/menu/sdinfo.jpg'"
                                     id="picture" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- <a href="opdinvo.php"> -->
                                <img src="images/menu/piidinfo.jpg"
                                     class="img-responsive img-thumbnail"
                                     onMouseOver="src='images/menu/piiinfo.jpg'"
                                     onMouseOut="src='images/menu/piidinfo.jpg'"
                                     id="picture" />
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hidenv.js"></script>

</main>
</body>
</html>
