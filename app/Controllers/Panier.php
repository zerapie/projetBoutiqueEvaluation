<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\ProductsModel;

class Panier extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelProducts 		= new ProductsModel();
		/* **********  fin  initialisation Model ********** */
	}
	public function index()
	{
		
		$data = [
			'session' => session(),
		];


		echo view('common/Header', $data);
		echo view('Panier');
		echo view('common/Footer');
	}

	public function save()
	{

	}
} 
?> 