<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class ProductForm extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('admin/ProductForm');
		echo view('common/FooterAdmin');
	}
}