<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\LoginRegisterModel;
use App\Models\CardModel;
use App\Models\ProductsModel;


class Panier extends BaseController
{
	public function __construct()
	{
		/* ********** debut initialisation Model ********** */
        $this->ModelUser 	 = new LoginRegisterModel();
		$this->ModelCard	 = new CardModel();
		$this->modelProducts = new ProductsModel();
		/* **********  fin  initialisation Model ********** */
	}
	/* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *         *         *         *         *       INDEX       *         *         *         *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */
	public function index()
	{
		$session = session();
		$user = $session->get('user_id');
		$userDetail = $this->ModelUser->where('user_id', $user)->first();



		$card = $this->ModelCard->findAll();

		/* ********** debut envoie sur la vue ********** */
		$data = [
			'session' 	=> session(),
			'userDetail'=> $userDetail,
			'cards'		=> $card
		];

		echo view('common/Header', $data);
		echo view('Panier', $data);
		echo view('common/Footer');
		/* **********  fin  envoie sur la vue ********** */
	}
    /* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *         *         *         *         *       SAVE        *         *         *         *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */
	public function save($produit_id=null)
	{
		$session = session();
		$user = $session->get('user_id');
		echo $produit_id; 
		echo $user;

		$dataSave = [
			'Card_user_id' => $user,
			'Card_produit_id' => $produit_id
		];
		$this->ModelCard->save($dataSave);	
		return redirect()->to('/panier/index');
	}
    /* ***************************************************************************************************** */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* *         *         *         *         *       DELETE      *         *         *         *         * */
    /*  *         *         *         *         *       *         *         *         *         *         *  */
    /* ***************************************************************************************************** */
	public function delete($id=null)
    {
        /* SUPPRETION D'UNE LIGNE PAR ID */
        $this->ModelCard->where('Card_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/panier/index/');
        // header('Location: '.base_url('/panier/index/'));
	}
} 
?> 