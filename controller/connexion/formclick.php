<?php

require_once 'form.php';
session_start();
$ctrl = new ControleurConnexion();
$ctrl->Connexion($_POST['username'],$_POST['userpassword']);