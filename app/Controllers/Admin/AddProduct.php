<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\SousCategoriesModel;


class AddProduct extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelProducts 		= new ProductsModel();
		$this->modelCategories 		= new CategoriesModel();
		$this->modelSousCategories 	= new SousCategoriesModel();
		/* **********  fin  initialisation Model ********** */
	}
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  INDEX  *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function index()
	{
		$data = [
			'Categories' 		=> $this->modelCategories->findAll(),
			'SousCategories'	=> $this->modelSousCategories->findAll(),
		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/AddProduct', $data);
		echo view('common/FooterAdmin');
	}
	/* ***************************************************************************************************** *
 	 * *         *         *         *         *  SAVE   *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function save($id=null)
	{ 
		/* ********** debut stock variable = requette selection liste de la table ********** */
		$queryProducts = $this->modelProducts->findAll();
		/* **********  fin  stock variable = requette selection liste de la table ********** */

		/* ********** debut - control du formulaire ********** */
		$rule = [
			'productName'			=> 'required',
			'productDescription'	=> 'required',
			'salePrice'				=> 'required',
			'Categories'			=> 'required',
			'SousCategories'		=> 'required',
		];
		/* **********  fin  - control du formulaire ********** */

		/* ********** debut - condition enregistrement ********** */
		if ($this->validate($rule)) {
			$dataSave = [
				'product_name' 			=> $this->request->getVar('productName'),
				'Product_description' 	=> $this->request->getVar('productDescription'),
				'price' 				=> $this->request->getVar('salePrice'),
				'category_id' 			=> $this->request->getVar('Categories'),
				'sous_categorie_id' 	=> $this->request->getVar('SousCategories'),
			];

			
			$this->modelProducts->save($dataSave);	
			return redirect()->to('/admin/ListProduct');
		} 
		/* **********  fin  - condition enregistrement ********** */

		/* ********** debut envoie sur la vue ********** */
		$data =[
			'validation'=> $this->validator,
			'queryProducts'	=> $queryProducts
		];

		echo view('AddProduct', $data);
		/* **********  fin  envoie sur la vue ********** */
	}
	/* ***************************************************************************************************** *
 	 * *         *         *         *         * UPDATE  *         *         *         *         *         * *
	 * ***************************************************************************************************** */
}