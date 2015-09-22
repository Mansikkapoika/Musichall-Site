<?php

require_once 'form.php';
$ctrl = new ControleurConnexion();
$ctrl->Connexion($_POST['username'],$_POST['userpassword']);