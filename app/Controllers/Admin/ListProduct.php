<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\CategoriesModel;

class ListProduct extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelProducts = new ProductsModel();
		$this->modelCategorie = new CategoriesModel();
		/* **********  fin  initialisation Model ********** */
		
	}
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index($id=null)
	{
		/* ********** debut envoie sur la vue ********** */
        $data = [
		/* ********** debut stock variable = requette selection liste de la table ********** */
            'Products' => $this->modelProducts->findAll(), // pour la boucle liste des Produits
			'Categories' => $this->modelCategorie->findAll() // requette pour nom categorie
		/* **********  fin  stock variable = requette selection liste de la table ********** */
	];
	
	
		echo view('common/HeaderAdmin');
		echo view('admin/ListProduct', $data);
		echo view('common/FooterAdmin');
		/* ********** fin envoie sur la vue ********** */
	}
}