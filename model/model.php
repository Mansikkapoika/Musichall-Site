<?php

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