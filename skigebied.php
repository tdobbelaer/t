<html>
<head>


	<!-- Add jQuery library -->
	<script type="text/javascript" src="../t/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../t/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../t/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="../t/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../t/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="../t/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../t/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../t/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="../t/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

</head>
<body>
<h3><?php echo("Skigebied"); ?></h3>



<div>
<?php 
echo _("
L`Espace Killy is de naam van het beroemde skigebied van Tignes en Val d `Isère. 
Het gebied is bijzonder uitgestrekt en heeft een uitzonderlijk groot hoogteverschil van 1550 meter tot 3460 meter. 
De 158 afdalingen worden ontsloten door 90 skiliften. 
Er zijn 29 zwarte afdalingen, 40 rode afdalingen, 67 blauwe afdalingen 23 groene, eenvoudige afdalingen en 44 kilometer loipen. 
Daarnaast zijn er 2 gletsjer pistes, 6 slalom stadions, 2 half pipes, 2 snowparks en 1 gliss`park, waar u de beginselen van freestyle- skiën kunt leren. Gevorderden zullen onder de indruk raken van de talrijke zwarte pistes en off-piste mogelijkheden. 
De face op de Roche de Bellevarde is een zwarte piste die begint op de bergtop ( 2827 meter) en een kilometer lager eindigt in Val d`Isère. 
Het is een geweldig skigebied voor freeriders die lekker off-piste in de natuur willen skiën. 
Beginners en liefhebbers van relaxte tochtjes komen op de lange en brede blauwe pistes ook ruim aan hun trekken. 
Met de sneeuwzekerheid zit het ook goed. Het skiseizoen begint in Tignes al eind september en eindigt na de eerste week in mei. 
Skiën met Pasen of in de meivakantie? Het kan in Tignes. 
Naast skiën en snowboarden kunt u in Tignes ook ijs duiken, schaatsen, paragliden, sportklimmen, rijden met de hondenslee, sneeuwscooter tochten maken, ijs karten, snowbiken en heliskiën. 
Dit is allemaal te bereiken met de skilift op 50 meter van Chalet le Bouquetin. Na een dag op de pistes zijn er volop après-ski mogelijkheden.
"); ?>
</div>
<br>
	<p>
		<a class="fancybox-thumbs" data-fancybox-group="thumb" href="/t/images/skigebied(groot).jpg" width="33%"><img src="/t/images/skigebied(groot).jpg" alt="" width="33%"/></a>
	</p>
<br>
<div>
<?php echo _(" 
Het dorpje Tignes lag vroeger in de vallei van de Isère, iets lager dan Val d`Isère. 
Na de 2e wereldoorlog werd in de Isère een hydro-elektrische stuwdam aangelegd. 
Door het ontstane stuwmeer, het Lac du Chevril, zou het oude dorpje Tignes onder water komen te liggen. 
De kerk werd verhuisd naar Tignes-les Boisses en het dorp liep uiteindelijk onder in 1952. 
Om de 10 jaar laat EDF het meer voor inspectie- en onderhoudswerkzaamheden aan de dam leeglopen en worden de resten van het oude Tignes nog zichtbaar.
Tegenwoordig bestaat Tignes uit 4 dorpjes. Onderaan de stuwdam aan een meer ligt Les Brévières, een charmant pittoresk savoyaards dorp (1550 m). 
Daarboven ligt Les Boisses (1800 m). De andere 2 zijn de modernste dorpen van Tignes en liggen een stuk hoger, Le Lac en Val Claret (2100 m). 
"); ?>
</div>
</body>
</html>