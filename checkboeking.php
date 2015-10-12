<?php
session_start();
?>

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../t/css/4-col-portfolio.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>

<?php
$_SESSION['aankomstdatum'] = $_POST['aankomstdatum'];
$_SESSION['vertrekdatum'] = $_POST['vertrekdatum'];
$_SESSION['vnaam'] = $_POST['vnaam'];
$_SESSION['anaam'] = $_POST['anaam'];
$_SESSION['adres'] = $_POST['adres'];
$_SESSION['postcode'] = $_POST['postcode'];
$_SESSION['woonplaats'] = $_POST['woonplaats'];
$_SESSION['land'] = $_POST['land'];
$_SESSION['telefoon'] = $_POST['telefoon'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['bezoekerstotaal'] = $_POST['bezoekerstotaal'];
$_SESSION['bezoekerstotaal18'] = $_POST['bezoekerstotaal18'];
$_SESSION['bezoekerstotaal13'] = $_POST['bezoekerstotaal13'];


$aankomstdatum = $_SESSION['aankomstdatum'];
$vertrekdatum = $_SESSION['vertrekdatum'];
$vnaam = $_SESSION['vnaam'];
$anaam = $_SESSION['anaam'];
$adres = $_SESSION['adres'];
$postcode = $_SESSION['postcode'];
$woonplaats = $_SESSION['woonplaats'];
$land = $_SESSION['land'];
$telefoon = $_SESSION['telefoon'];	
$email = $_SESSION['email'];	

$bezoekerstotaal = $_SESSION['bezoekerstotaal'];
$bezoekerstotaal18 = $_SESSION['bezoekerstotaal18'];
$bezoekerstotaal13 = $_SESSION['bezoekerstotaal13'];
  

?>
<h3><?php echo("Controleer uw informatie"); ?></h3>
<form role="form" class="form-horizontal"  action="index.php?page=Boeking succes" method="post">
	</br>
		<div class="form-group">
				<label class="control-label col-md-2" for="aankomstdatum"><?php echo _("Aankomstdatum:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo $_SESSION['aankomstdatum'] ?></p >
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2"for="vertrekdatum"><?php echo _("Vertrekdatum:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($vertrekdatum);?></p>
			</div>
		</div>
		
		<div class="form-group">
				<label class="control-label col-md-2"for="vnaam"><?php echo _("Voornaam:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($vnaam);?></p>
			</div>
		</div>
		
		<div class="form-group">
				<label class="control-label col-md-2" for="anaam"><?php echo _("Achternaam:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo $_SESSION['anaam'];?></p>
			</div>
		</div>
		
		<div class="form-group">
				<label class="control-label col-md-2" for="adres"><?php echo _("Adres:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($adres);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2" for="postcode"><?php echo _("Postcode:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($postcode);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2" for="woonplaats"><?php echo _("Woonplaats:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($woonplaats);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2" for="land"><?php echo _("Land:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($land);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2" for="telefoon"><?php echo _("Telefoonnummer:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($telefoon);?></p>
			</div>
		</div>
		
		<div class="form-group">
				<label class="control-label col-md-2"for="email"><?php echo _("Email adres:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($email);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2"for="bezoekerstotaal"><?php echo _("Totaal aantal bezoekers:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($bezoekerstotaal);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2"for="bezoekerstotaal18"><?php echo _("Aantal bezoekers onder 18 jaar:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($bezoekerstotaal18);?></p>
			</div>
		</div>

		<div class="form-group">
				<label class="control-label col-md-2"for="bezoekerstotaal13"><?php echo _("Aantal bezoekers onder 13 jaar:")?></label>
			<div class="col-sm-10">
				<p class="form-control-static"><?php echo htmlspecialchars($bezoekerstotaal13);?></p>
			</div>
		</div>		
		
		<div class="col-lg-10">
			<div class="col-lg-5">
				<button type="submit" class="btn btn-info btn-block"><?php echo _("Boek nu!") ?></button>
			</div>
			<div class="col-lg-5">
				<button Type="button" class="btn btn-info btn-block"  onClick="history.go(-1);return true;"><?php echo _("Terug") ?></button>
			</div>
		</div>
</form>


</body>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

</html>