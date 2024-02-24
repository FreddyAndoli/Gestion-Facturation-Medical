
<nav style=" border-radius: 0px; height:20px;background-color:#FFF" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand">Bienvenu <font color="#7eaefc"><?php echo $_SESSION['sadmun']; ?>!</font> Vous êtes connecté en tant que <?php echo $_SESSION['admty']; ?> <a href="dminlogout.php">Se déconnecter</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li><a  href="menu.php">Menu</a></li>
        <li><a  href="patin.php">Informations sur les patients</a></li>
        <li><a  href="staff.php">Informations sur le personnel</a></li>
        <li><a  href="invoinfo.php">Factures des patients</a></li>

        
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
