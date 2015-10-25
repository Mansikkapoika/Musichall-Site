<?php

// Connexion à la base de données en PDO
function BDDConnexionPDO()
{
	$PARAM_hote='localhost'; 	$PARAM_port='3306';
	$PARAM_nom_bd='musichall'; 	$PARAM_utilisateur='root'; 
	$PARAM_mot_passe='mangos'; 
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
		$user='root';
		$password='mangos';
		$database='musichall';

		if ($this->mysqli == null) {
			$this->mysqli = new mysqli($host, $user, $password, $database);
		}
		return $this->mysqli;

		if(mysqli_connect_errno())
		{
			echo "Erreur lors de la connexion à la base de données.";
			exit;
		}
	}

}