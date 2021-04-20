<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
/* ********** debut appel Model ********** */

/* **********  fin  appel Model ********** */


class Home extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */

		/* **********  fin  initialisation Model ********** */
	}
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header', $data);
		echo view('index');
		echo view('common/Footer');
	}
}
?>