<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class AddProduct extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('admin/AddProduct');
		echo view('common/FooterAdmin');
	}
}