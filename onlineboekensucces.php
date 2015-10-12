<html>
	<head>

	</head>
   
		<body>
   <h3><?php echo("Bedankt voor uw boeking"); ?></h3>   

	<?php
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
		
		$datum = date("d/m/y");

		$to      = 'dj-fade-out@live.nl';
        $subject = "Boeking";
        
		$message = "
			<html>
				<body>
					<table width='100%' border='1' style='border-color: #666;' cellpadding='10'>
						<tr style='background: #eee;'><td><strong>Voornaam:</strong></td><td>$vnaam</td></tr>
						<tr><td><strong>Achternaam:</strong> </td><td>$anaam </td></tr>
						<tr><td><strong>Aakomstdatum:</strong> </td><td>$aankomstdatum</td></tr>
						<tr><td><strong>Vertrekdatum:</strong> </td><td>$vertrekdatum</td></tr>
						<tr><td><strong>Adres:</strong> </td><td>$adres</td></tr>
						<tr><td><strong>Postcode:</strong> </td><td>$postcode</td></tr>
						<tr><td><strong>Land:</strong> </td><td>$land</td></tr>
						<tr><td><strong>E-mail adres:</strong> </td><td>$email</td></tr>
						<tr><td><strong>Totaal aantal bezoekers:</strong> </td><td>$bezoekerstotaal</td></tr>
						<tr><td><strong>Totaal aantal bezoekers onder 18 jaar:</strong> </td><td>$bezoekerstotaal18</td></tr>
						<tr><td><strong>Totaal aantal bezoekers onder 13 jaar:</strong> </td><td>$bezoekerstotaal13</td></tr>
					</table>
				</body>
			</html>";
		   
        $header = "From:info@chaletlebouquetin.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
         
        $retval = mail ($to,$subject,$message,$header);
         
        if( $retval == true )
        {
			echo "</br>";
			echo "<div class='alert alert-success' role='alert'>";
			echo _('Bedankt voor uw boeking'); 
			echo " "; 
			echo "<b>"; 
			echo $vnaam; 
			echo " "; 
			echo $anaam; 
			echo "</b>";
			echo "</div>";
			header("Refresh: 5; URL=index.php?page=Home");

			
        }
		else
		{
			echo "</br>";
			echo '<div class="alert alert-danger" role="alert">You successfully read this important alert message.</div>';
		}
	?>
      
	</body>
</html>