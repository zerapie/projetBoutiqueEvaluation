<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\LoginRegisterModel;


class DetailOrders extends BaseController
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
			'userDetail' => $userDetail
		];

		echo view('common/HeaderAdmin', $data);
		echo view('admin/DetailOrders', $data);
		echo view('common/FooterAdmin');
		/* **********  fin  envoie sur la vue ********** */
	}
	
	public function save()
	{
		$data = [

		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/DetailOrders', $data);
		echo view('common/FooterAdmin');
	}

}