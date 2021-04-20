<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Verifier extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */

		/* **********  fin  initialisation Model ********** */
	}
    /* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *         *         *         *         *  INDEX  *         *         *         *         *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */
	public function index()
	{
		$data = [
			'session' => session(),
		];
	
		echo view('common/Header', $data);
		echo view('Verifier', $data);
		echo view('common/Footer');
	}
}
?>
