<?php	namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class Error_production extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('Admin/Error_production');
		echo view('common/FooterAdmin');
	}
}
?>
