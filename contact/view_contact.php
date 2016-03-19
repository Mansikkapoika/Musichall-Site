<?php ob_start(); ?>
<?php if(isset($_SESSION['error']))
{ ?>
	<div class="error"><h3>
		<i class="fa fa-info"></i> 
		<?= $_SESSION['error']; ?>
	</h3></div>
	<?php } ?>
	
	<div class="main">
		<div class="wrap">
			<div class="preview-page">
				<div class="contact_info">
					<div class="map">


						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d788.7562056223042!2d-0.7610061603448265!3d48.071724437142244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4808fdfbee185da1%3A0x58a86bc64b30fe99!2s7+Rue+des+Archives%2C+53000+Laval!5e1!3m2!1sfr!2sfr!4v1458224232847" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="color:#888;text-align:left;font-size:0.85em" allowfullscreen></iframe>
						<br><small><a href="https://www.google.com/maps?ll=48.071756,-0.759933&z=16&t=h&hl=fr-FR&gl=FR&mapclient=embed&q=7+Rue+des+Archives+53000+Laval" style="color:#888;text-align:left;font-size:0.85em">Agrandir la carte</a></small>

						
					</div>
				</div>
				<div class="contact-form">
					<h3>Nous contacter</h3>
					<form method="post" action="contact-post.html">
						<div>
							<input name="userName" type="text" class="textbox textbox1" value="Nom...">
							<input name="userEmail" type="text" class="textbox" value="Email...">
							<input name="usersubject" type="text" class="textbox" value="Sujet...">
							<div class="clear"></div>
						</div>
						<div>
							<span><textarea name="userMsg" value="Message:">Message</textarea></span>
						</div>
						<div>
							<input type="submit" value="Submit"  class="mybutton">
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>		
		</div> 
	</div>
</div>
<?php $contenu = ob_get_clean(); ?>