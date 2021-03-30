<?php	namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Home extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('Admin/Home');
		echo view('common/FooterAdmin');
	}
}
?>