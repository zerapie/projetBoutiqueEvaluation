<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class DetailOrders extends BaseController
{
	public function index()
	{
		$data = [

		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/DetailOrders', $data);
		echo view('common/FooterAdmin');
	}
	public function save()
	{
		$data = [

		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/DetailOrders', $data);
		echo view('common/FooterAdmin');
	}

}