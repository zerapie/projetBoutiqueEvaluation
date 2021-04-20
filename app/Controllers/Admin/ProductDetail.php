<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\LoginRegisterModel;
use App\models\ProductsModel;


class ProductDetail extends BaseController
{

    public function __construct()
    {
        /* ********** debut initialisation Model ********** */
        $this->ModelUser = new LoginRegisterModel();
        $this->modelProducts = new ProductsModel();
		/* **********  fin  initialisation Model ********** */
    }
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  INDEX  *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function index($id=null)
    {
		/* ********** debut stock variable = initialisation session ********** */
		$session = session();
		/* **********  fin  stock variable = recuperation id par session ********** */
		$user = $session->get('user_id');
		/* **********  fin  stock variable = initialisation session ********** */


		/* ********** debut stock variable = requette selection detail user par sesion ********** */
		$userDetail = $this->ModelUser->where('user_id', $user)->first();
        $Products   = $this->modelProducts->where('Product_id', $id)->first();

        /* **********  fin  - stocker variable = requette ********** */

        
        /* ********** debut envoie sur la vue ********** */
        $data = [
            'Products' => $Products,
			'userDetail' => $userDetail
        ];

        echo view('common/HeaderAdmin', $data);
        echo view('admin/ProductDetail', $data);
        echo view('common/FooterAdmin');
		/* **********  fin  envoie sur la vue ********** */
    }
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  UPDATE *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function update($id=null)
    {

    }
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  DELETE *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function delete($id=null)
    {
        /* SUPPRETION D'UNE LIGNE PAR ID */
        $this->modelSousCategorie->where('sous_categorie_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/Admin/ListSousCategorie/');
        // header('Location: '.base_url('/Admin/ListSousCategorie/'));
    }

}