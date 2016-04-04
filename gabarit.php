<!DOCTYPE HTML>
<head>
	<title><?php echo $titre; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="/2014-musichall/content/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="/2014-musichall/content/js/jquery-1.9.0.min.js"></script> 
	<script type="text/javascript" src="/2014-musichall/content/js/jquery.openCarousel.js"></script>
	<script type="text/javascript" src="/2014-musichall/content/js/easing.js"></script>
	<script type="text/javascript" src="/2014-musichall/content/js/move-top.js"></script>
	<!-- CSS et JS de la page d'affichage des produits -->
	<script src="/2014-musichall/content/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<link href="/2014-musichall/content/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
		});
	</script>		
	<link rel="stylesheet" href="/2014-musichall/content/css/etalage.css">
	<script src="/2014-musichall/content/js/jquery.etalage.min.js"></script>
	<script>
		jQuery(document).ready(function($){

			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 900,
				source_image_height: 1200,
				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});

		});
	</script>
	<script src="/2014-musichall/content/js/star-rating.js" type="text/javascript"></script>
</head>
<body>
	<!-- START Header -->
	<?php include 'header.php'; ?>
	<!------------End Header ------------>
	<div class="main">
		<div class="content">
			<!-- Barre du panier -->
			<?php
			if (!isset($_SESSION['Panier']))
				{ ?>
			<div class="panier"><h3><div class="bloc"><i class="fa fa-shopping-cart"></i> Panier : 0 articles</div></h3></div>
			<?php }
			else
				{ ?>
			<div class="panier"><h3><div class="bloc"><i class="fa fa-shopping-cart"></i> Panier : <?php echo $_SESSION['Panier']->getNbProd(); ?> article(s) <?php $chem = "/2014-musichall/panier"; ?><a href="<?= $chem; ?>">Voir</a></div></h3></div>
			<?php } ?>
			<div class="line"></div>
			<!-- Barre du panier -->
			<?= $contenu; ?>
		</div>
	</div>

	<!------------START Footer ------------>
	<?php include 'footer.php'; ?>
	<!------------End Footer ------------>
</body>
</html>