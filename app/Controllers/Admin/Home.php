<?php	namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LoginRegisterModel;

class Home extends BaseController
{
	public function __construct()
	{
        $this->ModelUser = new LoginRegisterModel();
	}
	public function index()
	{
		/* ********** debut stock variable = initialisation session ********** */
		$session = session();
		/* **********  fin  stock variable = recuperation id par session ********** */
		$user = $session->get('user_id');
		/* **********  fin  stock variable = initialisation session ********** */


		/* ********** debut stock variable = requette selection detail user par sesion ********** */
		$userDetail = $this->ModelUser->where('user_id', $user)->first();
		/* **********  fin  stock variable = requette selection detail user par sesion ********** */
		

		/* ********** debut envoie sur la vue ********** */
		$data = [
			// 'userAdmin'	=> $user,
			'userDetail' => $userDetail
		];

		echo view('common/HeaderAdmin', $data);
		echo view('Admin/Home', $data);
		echo view('common/FooterAdmin');
		/* **********  fin  envoie sur la vue ********** */
	}
}
?>