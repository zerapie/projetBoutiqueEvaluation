<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\OrdersModel;
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


		/* ********** debut stock variable = initialisation des requettes ********** */
		$userDetail = $this->ModelUser->where('user_id', $user)->first();
		$listOrders = $this->modelOrders->findAll();
		/* **********  fin  stock variable = initialisation des requettes ********** */
		

		/* ********** debut envoie sur la vue ********** */
		$data = [
			'userDetail' => $userDetail,
			'listOrders' => $listOrders
		];
	
		echo view('common/HeaderAdmin', $data);
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