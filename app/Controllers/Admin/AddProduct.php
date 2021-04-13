<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductsModel;


class AddProduct extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelProducts = new ProductsModel();
		/* **********  fin  initialisation Model ********** */
	}
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index()
	{
		$data = [
			'' => ''
		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/AddProduct', $data);
		echo view('common/FooterAdmin');
	}
	/* **************************************************************************************************** *
 	 *          *         *         *         *  SAVE   *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function save()
	{
		/* ********** debut stock variable = requette selection liste de la table ********** */
		$queryProducts = $this->modelProducts->findAll();
		/* **********  fin  stock variable = requette selection liste de la table ********** */

		/* ********** debut - control du formulaire ********** */
		$rule = [
			'productName'	=> 'required',
		];
		/* **********  fin  - control du formulaire ********** */

		/* ********** debut - condition enregistrement ********** */
		if ($this->validate($rule)) {
			$dataSave = [
				'product_name' => $this->request->getVar('productName'),
			];
				$this->modelProducts->save($dataSave);	
				// return redirect()->to('/admin/ListProduct');
		} 
		/* **********  fin  - condition enregistrement ********** */

		/* ********** debut envoie sur la vue ********** */
		$data =[
			'validation'=> $this->validator,
			'queryProducts'	=> $queryProducts
		];
		// echo view('ListProduct', $data);
		/* **********  fin  envoie sur la vue ********** */
	}
	/* **************************************************************************************************** *
 	 *          *         *         *         * UPDATE  *         *         *         *         *         * *
	 * **************************************************************************************************** */
}