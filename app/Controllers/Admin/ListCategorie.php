<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\CategoriesModel;


class ListCategorie extends BaseController
{

    public function __construct()
    {
        /* ********** debut initialisation Model ********** */
        $this->modelCategorie = new CategoriesModel();
		/* **********  fin  initialisation Model ********** */
    }
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  INDEX  *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function index($id=null)
    {
		/* ********** control du formulaire ********** */
        $rules = [
            'categorieNom' => 'required',
        ];
        /* ********** control du formulaire ********** */
        

        /* ********** debut - condition enregistrement ********** */
        if($this->validate($rules)){
            /* ********** debut initialisation Model ********** */
                $modelCategorie = new CategoriesModel();
            /* ********** debut initialisation Model ********** */
            
            $dataSave  = [
                'category_name'     => $this->request->getVar('categorieNom'),
            ];
            $modelCategorie->save($dataSave);
            
            return redirect()->to('/Admin/ListCategorie');
        }
		/* **********  fin  - condition enregistrement ********** */
		
        
        /* ********** debut envoie sur la vue ********** */
        $data = [
            'validation' => $this->validator,
            'modelCategorie' => $this->modelCategorie->paginate(10), // pour la boucle listCategorie
            'pager' =>  $this->modelCategorie->pager
        ];

        echo view('common/HeaderAdmin');
        echo view('admin/AddCategorie', $data);
        echo view('admin/ListCategorie', $data);
        echo view('common/FooterAdmin');
		/* **********  fin  envoie sur la vue ********** */
    }
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  UPDATE *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function update()
    {
         
    }
	/* ***************************************************************************************************** *
	 * *         *         *         *         *  DELETE *         *         *         *         *         * *
	 * ***************************************************************************************************** */
	public function delete($id=null)
    {
        /* SUPPRETION D'UNE LIGNE PAR ID */
        $this->modelCategorie->where('category_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/Admin/ListCategorie/');
        // header('Location: '.base_url('/Admin/ListCategorie/'));
    }

}