<?php
session_start();
?>

<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
		<link rel="stylesheet" href="../t/css/4-col-portfolio.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">

			<!-- Calender, optie alleen weekend is aan -->
			<script>
				$(function() {
				   $('#datepicker').datepicker({ 
					   beforeShowDay : function(date){
						if(date.getDay() == 0 || date.getDay()== 1 || date.getDay()== 2 || date.getDay()== 3 || date.getDay()== 4 || date.getDay()== 5)
							return [0];
					   else
							return [1];
					   }
				   });
					  $('#datepicker1').datepicker({ 
					   beforeShowDay : function(date){
						if(date.getDay() == 0 || date.getDay()== 1 || date.getDay()== 2 || date.getDay()== 3 || date.getDay()== 4 || date.getDay()== 5)
							return [0];
					   else
							return [1];
					   }
				   });
				 });
			</script>

	
	</head>

	<body>
<h3><?php echo("Online boeken"); ?></h3>
<form role="form" class="form-horizontal"  action="index.php?page=Check Boeking" method="post">
		</br>
		
	<div class="form-group">
    <label class="control-label col-md-3" for="aankomstdatum"><?php echo _("Aankomstdatum:")?></label>
		<div class="col-sm-9 ">
			<input type="text" class="form-control" name="aankomstdatum" id="datepicker" value="<?php echo $_SESSION['aankomstdatum'];  ?>" required>
		</div>
	</div>
  
  
	<div class="form-group">
	<label class="control-label col-md-3"for="vertrekdatum"><?php echo _("Vertrekdatum:")?></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="vertrekdatum"  id="datepicker1" value="<?php echo $_SESSION['vertrekdatum']; ?>" required >
		</div>
   </div>
   
	<div class="form-group">
	<label class="control-label col-md-3"for="vnaam"><?php echo _("Voornaam:")?></label>
		<div class="col-sm-9">
			<input type="name" class="form-control" name="vnaam" value="<?php echo $_SESSION['vnaam'];?>"  required>
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3" for="anaam"><?php echo _("Achternaam:")?></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="anaam" value="<?php echo $_SESSION['anaam']; ?>"  required>
		</div>
	</div>
	
	<div class="form-group">
	<label class="control-label col-md-3" for="adres"><?php echo _("Adres:")?></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="adres" value="<?php echo $_SESSION['adres']; ?>"  required>
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3" for="postcode"><?php echo _("Postcode:")?></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="postcode" value="<?php echo $_SESSION['postcode']; ?>"  required>
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3" for="woonplaats"><?php echo _("Woonplaats:")?></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="woonplaats" value="<?php echo $_SESSION['woonplaats'];?>" required >
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3" for="land"><?php echo _("Land:")?></label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="land"  value="<?php echo $_SESSION['land']; ?>"  required>
		</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-3" for="telefoon"><?php echo _("Telefoonnummer:")?></label>
		<div class="col-sm-9">
			<input type="tel" class="form-control" name="telefoon" value="<?php echo $_SESSION['telefoon']; ?>"  required>
		</div>
	</div>
	
	<div class="form-group">
	<label class="control-label col-md-3" for="email"><?php echo _("Email adres:")?></label>
		<div class="col-sm-9">
			<input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>"  required>
		</div>
	</div>
  
	<div class="form-group">
	<label class="control-label col-md-3" for="bezoekerstotaal"><?php echo _("Totaal aantal bezoekers:"); ?></label>
		<div class="col-sm-9">
			<select class="form-control" id="bezoekerstotaal" name="bezoekerstotaal"  required>
				<option><?php echo $_SESSION['bezoekerstotaal']; ?></p></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>		
			</select>
		</div>
	</div>
	
    <div class="form-group">
    <label class="control-label col-md-3" for="bezoekerstotaal18"><?php echo _("Totaal aantal bezoekers onder de 18 jaar?"); ?></label>
		<div class="col-sm-9">
			<select class="form-control" id="bezoekerstotaal18" name="bezoekerstotaal18" required>
				<option><?php echo $_SESSION['bezoekerstotaal18']; ?></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>		
			</select>
		</div>
	</div>
	
    <div class="form-group">
    <label class="control-label col-md-3" for="bezoekerstotaal13"><?php echo _("Totaal aantal bezoekers onder de 13 jaar? (i.v.m toeristenbelasting) ");  ?></label>
		<div class="col-sm-9">
			<select class="form-control" id="bezoekerstotaal13" name="bezoekerstotaal13" required>
				<option><?php echo $_SESSION['bezoekerstotaal13']; ?></option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>		
			</select>
		</div>
	</div>
   
   
   
	<div class="form-group">
	<label class="control-label col-md-3" for="akkoord"><?php echo _("Ik ga akkoord met de voorwaarden")?></label>
		<div class="col-sm-9">
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="../t/voorwaardenNL.php"></iframe>
			</div>
		</div>
	</div>
  
  
    <div class="form-group">
	<label class="control-label col-md-3" for="akkoord"><?php echo _("Ik ga akkoord met de voorwaarden")?></label>
		<div class="col-sm-9">
			<input type="checkbox" required> 
		</div>
	</div>
   
	<div class="col-lg-10">
		<div class="col-lg-5 col-xs-12 col-sm-5 col-lg-5">
			<button type="submit" class="btn btn-info btn-block"><?php echo _("Verder >>") ?></button>
		</div>
</form>

<form role="form" class="form-horizontal"  action="index.php?page=Clear fields" method="post">		
	<div class="col-lg-5 col-xs-12 col-sm-5 col-lg-5">
			<button type="submit" class="btn btn-info btn-block"><?php echo _("Opnieuw") ?></button>
	</div>
	</div>
	
</form>

</br>
</br>

</body>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

</html>