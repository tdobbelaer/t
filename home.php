<?php include 'fancybox.php'; ?>


<head>
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


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
		</br>
		<a  class="fancybox-thumbs" href="../t/images/chalet-bouquetin-front-view.jpg" rel="fancybox-thumbs" data-thumbnail="../t/images/chalet-bouquetin-front-view.jpg" data-fancybox-group="gallery-1" title="Chalet le Bouquetin, Tignes ">
		<img src="../t/images/chalet-bouquetin-front-view.jpg"  class="img-rounded"  width="100%" height="330" alt="" >
		</a>
    </div>
            
	<div class="col-xs-12 col-sm-12 col-md-4">
		</br>
			<ul>
				<li><?php echo _("Luxe chalet") ?></li>
				</br >
				<li><?php echo _("120 m²") ?></li>
				</br >
				<li><?php echo _("11 personen") ?></li>
				</br >
				<li><?php echo _("4 slaapkamers") ?></li>
				</br >
				<li><?php echo _("3 x 2 bedden, 1 x 3 bedden en een stapelbed") ?></li>
				</br >
				<li><?php echo _("3 badkamers") ?></li>
				</br >
				<li><?php echo _("2 garages") ?></li>
				</br >
				<li><?php echo _("50 meter van skilift") ?></li>
			</ul>
    </div>


	<div class="col-xs-12 col-sm-12 col-md-12">
	<br>
			<?php echo _("Chalet le Bouquetin is een comfortabel, stijlvol ingericht chalet gelegen op de zuidwest helling net boven de dorpskern van Tignes les Brévières, met een prachtig uitzicht op de omliggende bergen en het meer van Brévières. 
			Tignes-les-Brévières is een klein traditioneel savoye dorp, het gezellige centrum ligt op ca.200 meter afstand. 
			Hier vindt u authentieke Savoyaardse restaurants, lokale cafés, een Nederlandse bar( met gratis WIFI internet), een skischool, pinautomaten, skiverhuur, een postkantoor(met gratis WIFI internet) en grote terrassen met uitzicht op de oefenweide en de piste. 
			Verder vindt u er alles wat u van een onvergetelijke vakantie mag verwachten.") ?>
			</br>
			</br>
			<?php echo _("Chalet le Bouquetin is een comfortabel, stijlvol ingericht chalet gelegen op de zuidwest helling net boven de dorpskern van Tignes les Brévières, met een prachtig uitzicht op de omliggende bergen en het meer van Brévières. Tignes-les-Brévières is een klein traditioneel savoye dorp, het gezellige centrum ligt op ca. 200 meter afstand. Hier vindt u authentieke Savoyaardse restaurants, lokale cafés, een Nederlandse bar( met gratis WIFI internet), een skischool, pinautomaten, skiverhuur, een postkantoor(met gratis WIFI internet) en grote terrassen met uitzicht op de oefenweide en de piste. Verder vindt u er alles wat u van een onvergetelijke vakantie mag verwachten.
chalet Op 50 meter van chalet le Bouquetin bevindt zich de nieuwe skilift die toegang biedt tot het skigebied van Tignes – Val d`Isère, bekend als Espace Killy. ‘Espace Killy’ is een van de meest uitgestrekte ski- en snowboardgebieden ter wereld. Het gebied is sneeuwzeker, iets wat in deze tijd niet overal meer vanzelfsprekend is. Met het verbinden van Tignes en Val d’Isere biedt dit gebied 300 km aan geprepareerde pistes, 23 groene, 67 blauwe, 40 rode en 29 zwarte pistes. ")
	?>
	
		</br>
		</br>
	</div>
</div>
			
			

