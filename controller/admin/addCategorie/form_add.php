<?php

class ControleurAddCat {

	private $admin;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../../model/model.php')) 
		{
			require_once '../../../model/admin.php';
		}
		elseif(file_exists(getcwd().'/../../model/model.php')) 
		{
			require_once '../../model/admin.php';
		}
		elseif(file_exists(getcwd().'/../model/model.php')) 
		{
			require_once '../model/admin.php';
		}
		elseif(file_exists(getcwd().'/model/model.php'))
		{
			require_once 'model/admin.php';
		}

		$this->admin = new Admin();
	}

	public function AddCategorie($nom) {

		// On échappe la variable pour les requêtes SQL et les injections
		$nom = $this->admin->echapVar($nom);

		// On vérifie si la catégorie n'existe pas déjà
		$verif = $this->admin->VerifCat($nom);
		if ($verif >1)
		{
			$_SESSION['error'] = "La catégorie existe déjà.";
			header('Location: ../../../admin');
		}
		else
		{
			if ($this->admin->AddCat($nom))			// Ajout de la catégorie
			{
				$_SESSION['error'] = "Catégorie ajoutée.";
				header('Location: ../../../admin');
			}
			else
			{
				$_SESSION['error'] = "Catégorie non ajoutée.";
				header('Location: ../../../admin');
			}
		}

	}

	public function AddSousCategorie($nom,$categorieparent) {

		// On échappe la variable pour les requêtes SQL et les injections
		$nom = $this->admin->echapVar($nom);

		// On vérifie si la sous catégorie n'existe pas déjà
		$verif = $this->admin->VerifSousCat($nom);
		if ($verif >1)
		{
			$_SESSION['error'] = "La sous catégorie existe déjà.";
			header('Location: ../../../admin');
		}
		else
		{
			if ($this->admin->AddSousCat($nom,$categorieparent))		// Ajout de la sous catégorie
			{
				$_SESSION['error'] = "Sous catégorie ajoutée.";
				header('Location: ../../../admin');
			}
			else
			{
				$_SESSION['error'] = "Sous catégorie non ajoutée.";
				header('Location: ../../../admin');
			}
		}

	}

}