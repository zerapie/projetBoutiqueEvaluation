<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class OrderComplete extends BaseController
{
	public function index()
	{

	
		echo view('common/Header');
		echo view('OrderComplete');
		echo view('common/Footer');
	}
}
?>