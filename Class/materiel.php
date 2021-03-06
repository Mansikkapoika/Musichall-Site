<?php
//Chargement du modèle contenant les appels à la base de données

if(file_exists(getcwd().'/../../model/model.php')) {
  require_once getcwd().'/../../model/produit.php';
}
elseif(file_exists(getcwd().'/../model/model.php')) {
  require_once getcwd().'/../model/produit.php';
}
elseif(file_exists(getcwd().'/model/model.php')) {
  require_once getcwd().'/model/produit.php';
}

/**
 * Permet de créer un produit pour un ajout ultérieur dans le panier
 */
class Materiel
{
     private $idMateriel;	   // Référence du produit
	   private $libelle;     // Libellé du produit
	   private $prixAchHT;   // Prix du produit
     private $nbstock;
	  //private $photo;  // Photo du produit
    //private $idSousCategorie;  // Lien vers la catégorie (sous plutot)

 /**
  * Constructeur d'une fleur
  */  
public function __construct () // Constructeur 
{ }


  /*
 public function __construct ($reference,$libelle,$leprix,$laphoto,$lacategorie) // Constructeur 
  {
     $this->ref = $reference;
	   $this->lib = $libelle;
	   $this->prix = $leprix;
	   $this->photo = $laphoto;
     $this->codeCategorie = $lacategorie;
  }		
*/


  /**
   * Retourne la référence de la fleur
   * @return type 
   */
  public function getRef()
  {
   return ($this->idMateriel);  
 }
 
  /**
   * Retourne le libellé de la fleur
   * @return type 
   */
  public function getDesignation()
  {
   return ($this->libelle);  
 }
 
  /**
   * Retourne le prix de la fleur
   * @return type 
   */
  public function getPrix()
  {
   return ($this->prixAchHT);  
 }

 public function getStock()
 {
  return ($this->nbstock);
}

  /**
   * Retourne le prix du produit
   * @return type 
   */
 /* public function getPhoto()
  {
   return ($this->photo);  
 }*/
 

    /**
   * Retourne le prix du produit
   * @return type 
   */
   /* public function getCategorie()
    {
      return ($this->idSousCategorie);  
    }*/


/**
* Accesseurs magiques
*/
public function __get($property) 
{
 return $this->$property;
}

public function __set($property, $value) 
{
  $this->$property = $value;
}

}



?>