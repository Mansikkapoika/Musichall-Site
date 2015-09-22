<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
	<title><?php echo $titre; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<script type="text/javascript" src="content/js/jquery-1.9.0.min.js"></script> 
	<script src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/js/jquery.openCarousel.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/js/easing.js"></script>
	<script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/js/move-top.js"></script>
</head>
<body>
	<!-- START Header -->
	<?php include 'header.php'; ?>
	<!------------End Header ------------>
	<div class="main">
		<div class="content">
			<?= $contenu; ?>
		</div>
	</div>

	<!------------START Footer ------------>
	<?php include 'footer.php'; ?>
	<!------------End Footer ------------>
</body>
</html>