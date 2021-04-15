<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\SousCategoriesModel;


class ListProduct extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelProducts = new ProductsModel();
		$this->modelCategorie = new CategoriesModel();
		$this->modelSousCategories 	= new SousCategoriesModel();
		/* **********  fin  initialisation Model ********** */
		
	}
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  INDEX  *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function index($catID=null)
	{
		if (!empty($catID)) {
			$Products = $this->modelProducts->where('Category_id',$catID)->paginate(20);
		} else {
			$Products = $this->modelProducts->paginate(40);
		};
		

		/* ********** debut envoie sur la vue ********** */
        $data = [
		/* ********** debut stock variable = requette selection liste de la table ********** */
            'Products' 			=> $Products, // pour la boucle liste des Produits
			'Categories' 		=> $this->modelCategorie->findAll(), // requette pour nom categorie
			'SousCategories'	=> $this->modelSousCategories->findAll(), // pour la boucle
			'pager' 			=> $this->modelProducts->pager
		/* **********  fin  stock variable = requette selection liste de la table ********** */
		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/ListProduct', $data);
		echo view('common/FooterAdmin');
		/* ********** fin envoie sur la vue ********** */
	}
}