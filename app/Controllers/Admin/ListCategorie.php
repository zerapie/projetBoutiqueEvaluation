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
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index($id=null)
    {
		/* ********** control du formulaire ********** */
        $rules = [
            'categorieNom' => 'required',
        ];
        /* ********** control du formulaire ********** */
        
        $data = [
            'modelCategorie' => $this->modelCategorie->findAll(), // pour la boucle listCategorie
        ];

        /* ********** debut - condition enregistrement ********** */
        if($this->validate($rules)){
            /* ********** debut initialisation Model ********** */
                $modelCategorie = new CategoriesModel();
            /* ********** debut initialisation Model ********** */
            
            $data  = [
                'category_name'     => $this->request->getVar('categorieNom'),
            ];
            $modelCategorie->save($data);
            
            return redirect()->to('/Admin/ListCategorie');
        }
		/* **********  fin  - condition enregistrement ********** */
        
    $data['validation'] = $this->validator;
    echo view('common/HeaderAdmin');
    echo view('admin/AddCategorie', $data);
    echo view('admin/ListCategorie', $data);
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
        $this->modelCategorie->where('category_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/Admin/ListCategorie/');
        // header('Location: '.base_url('/Admin/ListCategorie/'));
    }

}