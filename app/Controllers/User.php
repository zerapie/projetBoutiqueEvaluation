<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;

class User extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		// $this->user 		= new LoginRegisterModel();
		/* **********  fin  initialisation Model ********** */
	}
	public function index()
	{
		
		$data = [
			'session' => session(),
		];


		echo view('common/Header', $data);
		echo view('User');
		echo view('common/Footer');
	}

	public function save()
	{

	}
} 
?> 