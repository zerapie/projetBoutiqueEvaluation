<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Home extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('index');
		echo view('common/FooterAdmin');
	}
}
?>