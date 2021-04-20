<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Controllers\OrdersModel;
use App\Models\LoginRegisterModel;


class ListOrders extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
        $this->ModelUser 	= new LoginRegisterModel();
		$this->modelOrders 	= new OrdersModel();
		/* **********  fin  initialisation Model ********** */
	}

    /* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *  INDEX  *         *  INDEX  *         *  INDEX  *         *  INDEX  *         *  INDEX  *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */
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
	
		echo view('common/HeaderAdmin');
		echo view('admin/ListOrders', $data);
		echo view('common/FooterAdmin');
		/* **********  fin  envoie sur la vue ********** */
	}






    /* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *         *         *         *         *  *****  *         *         *         *         *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */

	/* ***************************************************************************************************** *
	 * *         *         *         *         *  *****  *         *         *         *         *         * *
	 * ***************************************************************************************************** */

}