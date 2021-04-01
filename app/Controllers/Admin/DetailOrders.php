<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class DetailOrders extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('admin/Error_production');
		echo view('common/FooterAdmin');
	}
}