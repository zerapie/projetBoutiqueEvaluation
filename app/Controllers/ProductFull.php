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
		/* **********  fin  initialisation Model ********** */
	}
	public function index($id=null, )
	{
		$product = $this->modelProducts->where('Product_id', $id)->first();
		
		
		if (!empty($catID)) {
			$SimiProducts = $this->modelProducts->where('Category_id',$catID)->paginate(16);
		} else {
			$SimiProducts = $this->modelProducts->paginate(8);
		};
		

		/* ********** debut envoie sur la vue ********** */
		$data = [
			'session'  		=> session(),
			'product' 		=> $product,
            'SimiProducts'	=> $SimiProducts // pour la boucle liste des Produits
		];

		echo view('common/Header', $data);
		echo view('ProductFull', $data);
		echo view('common/Footer');
		/* **********  fin  envoie sur la vue ********** */
	}
}
?>