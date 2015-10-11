<!-- Header du site (partie gabarit) -->
<div class="header">
	<div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/logo.png" alt="" /></a>
			</div>
			<div class="header_top_right">
				<div class="search_box">
					<span>Search</span>
					<form>
						<input type="text" value=""><input type="submit" value="">
					</form>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<!-- Menu top (haut) avec tests de session pour les boutons avec connexion requise ou droits requis -->
		<div class="navigation">
			<a class="toggleMenu" href="#">Menu</a>
			<ul class="nav">
				<li>
					<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/">Accueil</a>
				</li>
				<li>
					<a href="#">Informations</a>
				</li>
				<li>
					<a href="#">Boutique</a>
				</li>
				<li>
					<a href="#">Nouveautés</a>
				</li>
				<?php   if (!isset($_SESSION['username'])) { ?>
				<li>
					<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/register">S'enregistrer</a>
				</li>
				<li>
					<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/connexion">Se connecter</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="#">Mon compte</a>
				</li>
				<?php if (isset($_SESSION['username'])) { if ($access) { ?>
				<li>
					<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/admin">Admin</a>
				</li>
				<?php } else { } } ?>
				<li>
					<a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/connexion/disconnect.php">Se déconnecter</a>
				</li>
				<?php } ?>
				<li>
					<a href="#">Aide</a>
				</li>
				<li>
					<a href="#">Nous contacter</a>
				</li>
			</ul>
			<span class="left-ribbon"> </span> 
			<span class="right-ribbon"> </span>    
		</div>
		<!--
		<div class="header_bottom">
			<div class="slider-text">
				<h2>Les promos sont là ! <br/></h2>
				<p>Du matériel à prix réduits sont disponibles<br/> dans la catégorie des promotions.</p>
				<a href="#">Promotions</a>
			</div>
			<div class="slider-img">
				<img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/slider-img.png" alt="" />
			</div>
			<div class="clear"></div>
		</div> -->
	</div>
</div>
