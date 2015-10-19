<?php

require_once 'form.php';
$ctrl = new ControleurPanier();
$ctrl->Panier($_POST['reference'],$_POST['quantite']);