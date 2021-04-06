<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class ListProduct extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('admin/ListProduct');
		echo view('common/FooterAdmin');
	}
}