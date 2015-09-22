<?php

class ControleurAddCat {

	private $admin;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../../model/model.php')) {
			require_once getcwd().'/../../../model/admin.php';
		}
		if(file_exists(getcwd().'/../../model/model.php')) {
			require_once getcwd().'/../../model/admin.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			require_once getcwd().'/../model/admin.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			require_once getcwd().'/model/admin.php';
		}

		$this->admin = new Admin();
	}

	public function AddCategorie($nom) {

		$nom = $this->admin->echapVar($nom);

		// On vérifie si la catégorie n'existe pas déjà
		$verif = $this->admin->VerifCat($nom);
		if ($verif >1)
		{
			echo "La catégorie existe déjà.";
		}
		else
		{
			if ($this->admin->AddCat($nom))
			{
				echo "Catégorie ajoutée. Redirection dans 5 secondes.";
				header("refresh:5;url=/../");
			}
			else
			{
				echo "Erreur : Catégorie non ajoutée.";
			}
		}

	}

	public function AddSousCategorie($nom,$categorieparent) {

		$nom = $this->admin->echapVar($nom);

		// On vérifie si la sous catégorie n'existe pas déjà
		$verif = $this->admin->VerifSousCat($nom);
		if ($verif >1)
		{
			echo "La sous catégorie existe déjà.";
		}
		else
		{
			if ($this->admin->AddSousCat($nom,$categorieparent))		// Ajout de la sous catégorie
			{
				echo "Sous catégorie ajoutée.<br />";
				header("refresh:5;url=/../");
			}
			else
			{
				echo "Sous catégorie non ajoutée. $nom et $categorieparent";
			}
		}

	}

}