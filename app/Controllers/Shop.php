<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\SousCategorie;
use App\Models\Categorie;


class Shop extends BaseController
{
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header', $data);
		echo view('Shop');
		echo view('common/Footer');
	}
}
?>