<?php

// Connexion à la base de données en PDO
function BDDConnexionPDO()
{
	$PARAM_hote='localhost'; 	$PARAM_port='3306';
	$PARAM_nom_bd='2014-musichall_musichall'; 	$PARAM_utilisateur='2014-musichall'; 
	$PARAM_mot_passe='123456'; 
	try
	{      $connexion = new PDO('mysql:host='.$PARAM_hote.'; dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
}
catch(Exception $e)
{     echo 'Erreur : '.$e->getMessage().'<br />';
echo 'N° : '.$e->getCode();
die;
} 
return $connexion;
} 

class Model
{

	private $mysqli;

	public function getBdd() {

		$host='localhost';
		$user='2014-musichall';
		$password='123456';
		$database='2014-musichall_musichall';
		$port='3306';

		if ($this->mysqli == null) {
			$this->mysqli = new mysqli($host, $user, $password, $database, $port);
			$this->mysqli->query("SET NAMES UTF8");
		}
		return $this->mysqli;

		if(mysqli_connect_errno())
		{
			echo "Erreur lors de la connexion à la base de données.";
			exit;
		}
	}

}