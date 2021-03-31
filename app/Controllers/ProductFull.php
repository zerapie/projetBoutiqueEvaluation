<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class ProductFull extends BaseController
{
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header');
		echo view('ProductFull');
		echo view('common/Footer');
	}
}
?>