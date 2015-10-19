<?php
// Début du contrôleur, passage des paramètres (environnement de passage des variables) éventuels
require_once 'control.php';
// Ouvrir une session après l'include et pas avant (panier)
$ctrl = new controleurPanier();
$ctrl->affichePanier();