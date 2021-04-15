<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Controllers\OrdersModel;


class ListOrders extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
		$this->modelOrders 		= new OrdersModel();
		/* **********  fin  initialisation Model ********** */
	}

    /* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *  INDEX  *         *  INDEX  *         *  INDEX  *         *  INDEX  *         *  INDEX  *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */
	public function index()
	{
		
		$data = [

		];
	
		echo view('common/HeaderAdmin');
		echo view('admin/ListOrders', $data);
		echo view('common/FooterAdmin');
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