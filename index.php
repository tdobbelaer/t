<?php
// Start the session
session_start();
?>
<?php include 'header.php'; ?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title><?php echo _("Welkom - Chalet le Bouquetin"); ?></title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="../t/css/4-col-portfolio.css">
 </head>
<body>

<div class="container-fluid">
</body>
</html>


<nav class="navbar navbar-default  navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" a href="index.php?page=Home">Chalet Le Bouquetin</a>
    </div>
    
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav ">
        
		<li><a href="index.php?page=Skigebied"><?php echo _("Skigebied"); ?></a></li>
		<li><a href="index.php?page=Beschikbaarheid"><?php echo _("Beschikbaarheid"); ?></a></li>		
        <li><a href="index.php?page=Prijzen"><?php echo _("Prijzen"); ?></a></li>
        <li><a href="index.php?page=Online Boeken"><?php echo _("Online boeken"); ?></a></li> 
        <li><a href="index.php?page=Foto"><?php echo _("Foto's"); ?></a></li> 		
        <li><a href="index.php?page=Contact"><?php echo _("Contact"); ?></a></li> 



		</ul>
		
		<ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo _("Registreer"); ?></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> <?php echo _("Login"); ?></a></li> -->
		<li><a href="index.php?name=nl_NL"><img src="/flags/nl_NL.jpg" height="20" width="25"></a></li>
		<li><a href="index.php?name=fr_FR"><img src="/flags/fr_FR.jpg" height="20" width="25"></a></li>
		<li><a href="index.php?name=en_US"><img src="/flags/en_EN.jpg" height="20" width="25"></a></li>
		<li><a href="index.php?name=de_DE"><img src="/flags/de_DE.jpg" height="20" width="25"></a></li>
		</ul>
    </div>
  </div>
</nav>

<!-- Lege ruimte tussen menu en header -->

<!-- Begin header -->
<div class="row">
	<div class="col-md-12 col-lg-12 hidden-xs">
	
	<!--Begin col -->
		<img  class="img-rounded"  src='../t/images/Panorama1.jpg' width='100%' height='55%' >
		</br>
	</div>
</div>




<!-- Main content -->
	<div class="row">
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
	
<?php
//Als men geen pagina keuze heeft gemaakt
if($_GET['page'] == "")
{
	include 'home.php';
}

if($_GET['page'] == "Skigebied")
{
	include 'skigebied.php';
}
if($_GET['page'] == "Beschikbaarheid")
{
	include 'beschikbaarheid.php';
}
if($_GET['page'] == "Prijzen")
{
	include 'prijzen.php';
}
if($_GET['page'] == "Online Boeken")
{
	include 'onlineboeken.php';
}
if($_GET['page'] == "Check Boeking")
{
	include 'checkboeking.php';
}
if($_GET['page'] == "Boeking succes")
{
	include 'onlineboekensucces.php';
}
if($_GET['page'] == "Foto")
{
	include 'fotos.php';
}
if($_GET['page'] == "Contact")
{
	include 'contact.php';
}
if($_GET['page'] == "Home")
{
	include 'home.php';
}
if($_GET['page'] == "Clear fields")
{
	include 'clearfields.php';
}




?> 
	
	</div>
	
	<!-- WEER WIDGET -->
	<div  class="hidden-xs col-sm-12 col-md-3 col-lg-3">
				
			<span class="col-xs-12 ">
					<p vspace='10'>
					<span align='center'>

					<div style="width: 100%;height: 280px;">
					<div style="margin:7px 10px;"><div style="color: #222222;font-family: Arial;font-size: 12px;font-weight: bold;margin: 0px 0px 7px 0px;line-height: 14px;"><h4><?php echo _("Weersverwachting - Tignes") ?><br/><span style="font-weight:normal;"></span></h4></div>
					<iframe id="widget-frame" src="http://www.meteovista.be/Go/ExternalWidgetsNew/ThreeDaysCity?gid=4283008&sizeType=1&temperatureScale=Celsius&defaultSettings=False" width="235" height="216" frameborder="0" scrolling="no" style="border: none;" allowtransparency="true"></iframe>
					</div>
					</div>
					</span
					</div>
					</p>
	</div>
    
<!-- Footer -->
	<div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	</br>
	</br>
		<p align="center">&copy; 2015 Chalet le Bouquetin.com - Design by Tim Dobbelaer</p>
	</div>

			
	
