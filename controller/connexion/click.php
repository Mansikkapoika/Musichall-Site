<?php
// Début du contrôleur, passage des paramètres (environnement de passage des variables) éventuels
require_once 'control.php';
session_start();
$ctrl = new controleurConnexion();
$ctrl->afficheConnexion();