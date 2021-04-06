<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\CategoriesModel;


class ListCategorie extends BaseController
{

    public function __construct()
    {

        $this->modelCategorie = new CategoriesModel();

    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index()
	{

        $data = [

            'modelCategorie' => $this->modelCategorie->findAll(), // pour la boucle listCategorie
        ];
	
		echo view('common/HeaderAdmin');
		echo view('admin/AddCategorie', $data);
		echo view('admin/ListCategorie', $data);
		echo view('common/FooterAdmin');
	}
	/* **************************************************************************************************** *
	 *          *         *         *         *REGISTER *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function save($id=null)
    {
         //définir le formulaire de validation des règles / set rules validation form
        $rules = [
            'categorieNom'  	=> 'required',
        ];
        dd('teste 1');
         
        if($this->validate($rules)){
            $modelCategorie = new CategoriesModel();
            $data  = [
                'categorie_name'     => $this->request->getVar('categorieNom'),
            ];
            $modelCategorie->save($data);
            dd('teste 2');
            return redirect()->to('/listcategorie');
        }else{
            $data['validation'] = $this->validator;
            dd('teste 3');
            echo view('ListCategorie', $data);
        }
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