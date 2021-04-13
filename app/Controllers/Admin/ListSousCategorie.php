<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\SousCategoriesModel;


class ListSousCategorie extends BaseController
{

    public function __construct()
    {
        /* ********** debut initialisation Model ********** */
        $this->modelSousCategorie = new SousCategoriesModel();
		/* **********  fin  initialisation Model ********** */
    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index($id=null)
    {
		/* ********** control du formulaire ********** */
        $rules = [
            'SousCategorieNom'  	=> 'required',
        ];
        /* ********** control du formulaire ********** */
        
        $data = [
            'modelSousCategorie' => $this->modelSousCategorie->findAll(), // pour la boucle listSousCategorie
        ];

        /* ********** debut - condition enregistrement ********** */
        if($this->validate($rules)){
            /* ********** debut initialisation Model ********** */
            $modelSousCategorie = new SousCategoriesModel();
            /* ********** debut initialisation Model ********** */

            $dataSave  = [
                'sous_categorie_name'     => $this->request->getVar('SousCategorieNom'),
            ];
            $modelSousCategorie->save($dataSave);

            return redirect()->to('/Admin/ListSousCategorie');
        }
        /* **********  fin  - condition enregistrement ********** */

        $data['validation'] = $this->validator;
        echo view('common/HeaderAdmin');
        echo view('admin/AddSousCategorie', $data);
        echo view('admin/ListSousCategorie', $data);
        echo view('common/FooterAdmin');
    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  UPDATE *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function update()
    {
         
    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  DELETE *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function delete($id=null)
    {
        /* SUPPRETION D'UNE LIGNE PAR ID */
        $this->modelSousCategorie->where('sous_categorie_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/Admin/ListSousCategorie/');
        // header('Location: '.base_url('/Admin/ListSousCategorie/'));
    }

}