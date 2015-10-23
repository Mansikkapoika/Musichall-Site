<?php

require_once 'form.php';
$ctrl = new ControleurCommand();
$ctrl->Command();	// On ne passe rien en paramètres sachant que les produits sont dans le panier en variables de session
