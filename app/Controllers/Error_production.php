<?php	namespace App\Controllers;

use App\Controllers\BaseController;


class Error_production extends BaseController
{
	public function index()
	{
		$data = [
			'session' 			=> session(),
		];
	
		echo view('common/Header', $data);
		echo view('Admin/Error_production');
		echo view('common/Footer');
	}
}
?>
