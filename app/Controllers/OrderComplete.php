<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class OrderComplete extends BaseController
{
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header', $data);
		echo view('OrderComplete');
		echo view('common/Footer');
	}
}
?>