<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Verifier extends BaseController
{
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header');
		echo view('Verifier', $data);
		echo view('common/Footer');
	}
}
?>
