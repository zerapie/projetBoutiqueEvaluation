<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\LoginRegisterModel;
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\SousCategoriesModel;


class AddProduct extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
        $this->ModelUser 			= new LoginRegisterModel();
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
		/* ********** debut stock variable = initialisation session ********** */
		$session = session();
		/* **********  fin  stock variable = recuperation id par session ********** */
		$user = $session->get('user_id');
		/* **********  fin  stock variable = initialisation session ********** */


		/* ********** debut stock variable = requette selection detail user par sesion ********** */
		$userDetail = $this->ModelUser->where('user_id', $user)->first();
		/* **********  fin  stock variable = requette selection detail user par sesion ********** */
		

		$data = [
			'userDetail' 		=> $userDetail,
			'Categories' 		=> $this->modelCategories->findAll(),
			'SousCategories'	=> $this->modelSousCategories->findAll(),
		];
	
		echo view('common/HeaderAdmin', $data);
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
				'Price' 				=> $this->request->getVar('salePrice'),
				'Category_id' 			=> $this->request->getVar('Categories'),
				'Sous_categorie_id' 	=> $this->request->getVar('SousCategories'),
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
	public function update($id=null)
	{	
		/* ********** debut stock variable = initialisation session ********** */
		$session = session();
		/* **********  fin  stock variable = recuperation id par session ********** */
		$user = $session->get('user_id');
		/* **********  fin  stock variable = initialisation session ********** */


		/* ********** debut stock variable = requette selection detail user par sesion ********** */
		$userDetail = $this->ModelUser->where('user_id', $user)->first();
		$ProductUpdate = $this->modelProducts->where('Product_id', $id);
		/* **********  fin  stock variable = requette selection liste de la table ********** */



		/* ********** debut - control du formulaire ********** */
		$rule = [
			'productName'		 => 'required',
			'productDescription' => 'required',
			'salePrice'			 => 'required',
			'Categories'		 => 'required',
			'SousCategories'	 => 'required',
		];
		/* **********  fin  - control du formulaire ********** */

		/* ********** debut - condition enregistrement ********** */
		if ($this->validate($rule)) {
			$dataSave = [
				'product_name' 		  => $this->request->getVar('productName'),
				'Product_description' => $this->request->getVar('productDescription'),
				'Price' 			  => $this->request->getVar('salePrice'),
				'Regular_price' 	  => $this->request->getVar('regularPrice'),
				'Category_id' 		  => $this->request->getVar('Categories'),
				'Sous_categorie_id'   => $this->request->getVar('SousCategories'),
			];

			
			$ProductUpdate->set($dataSave)->update();
			return redirect()->to('/admin/ListProduct');
		} 
		/* **********  fin  - condition enregistrement ********** */



		/* ********** debut envoie sur la vue ********** */
		$data =[
			'userDetail' 		=> $userDetail,
			'id' => $id,
			'ProductUpdate'  => $ProductUpdate->first(),
			'Categories' 	 => $this->modelCategories->findAll(),
			'SousCategories' => $this->modelSousCategories->findAll(),
			'validation'	 => $this->validator,
		];

		echo view('common/HeaderAdmin', $data);
		echo view('admin/UpdateProduct', $data);
		echo view('common/FooterAdmin');
		/* **********  fin  envoie sur la vue ********** */
	}
	public function delete($id=null)
    {
        /* SUPPRETION D'UNE LIGNE PAR ID */
        $this->modelProducts->where('Product_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/admin/ListProduct/');
        // header('Location: '.base_url('/admin/ListProduct/'));
	}
}