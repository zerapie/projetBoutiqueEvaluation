<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Shop extends BaseController
{
	public function index()
	{

	
		echo view('common/Header');
		echo view('Shop');
		echo view('common/Footer');
	}
}
?>