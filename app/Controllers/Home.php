<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Home extends BaseController
{
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header');
		echo view('index');
		echo view('common/Footer');
	}
}
?>