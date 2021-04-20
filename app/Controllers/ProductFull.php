<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductsModel;


class ProductFull extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelProducts = new ProductsModel();
		// $this->modelCategorie = new CategoriesModel();
		// $this->modelSousCategories 	= new SousCategoriesModel();
		/* **********  fin  initialisation Model ********** */

	}
	public function index($id=null)
	{
		$product = $this->modelProducts->where('Product_id', $id)->first();



		$data = [
			'session'  => session(),
			'product' => $product
		];

		echo view('common/Header', $data);
		echo view('ProductFull');
		echo view('common/Footer');
	}
}
?>