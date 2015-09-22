<?php
require_once 'control.php';
session_start();
$ctrl = new controleurAccueil();
$ctrl->afficheAccueil();