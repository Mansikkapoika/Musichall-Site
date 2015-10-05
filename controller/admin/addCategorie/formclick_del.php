<?php
// Début du contrôleur du formulaire de suppression, passage des paramètres (environnement de passage des variables) éventuels
require_once 'form.php';
$ctrl = new ControleurDelCat();
session_start();
if (isset($_POST['form_DelCat'])) 
{
	$ctrl->DelCategorie($_POST['categorie']);
}
elseif (isset($_POST['form_DelSousCat']))
{
	$ctrl->DelSousCategorie($_POST['souscategorie'],$_POST['categorieparent']);
}