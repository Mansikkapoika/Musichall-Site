﻿<?php

require_once 'form_add.php';
$ctrl = new ControleurAddCat();
session_start();
if (isset($_POST['form_AjoutCat'])) 
{
	$ctrl->AddCategorie($_POST['categorie']);
}
elseif (isset($_POST['form_AjoutSousCat']))
{
	$ctrl->AddSousCategorie($_POST['souscategorie'],$_POST['categorieparent']);
}