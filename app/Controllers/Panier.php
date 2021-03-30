<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Panier extends BaseController
{
	public function index()
	{

	
		echo view('common/Header');
		echo view('Panier');
		echo view('common/Footer');
	}
}
?>