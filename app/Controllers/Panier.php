<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Panier extends BaseController
{
	public function index()
	{
		$data = [
			'session' => session(),
		];


		echo view('common/Header', $data);
		echo view('Panier');
		echo view('common/Footer');
	}
} 
?> 