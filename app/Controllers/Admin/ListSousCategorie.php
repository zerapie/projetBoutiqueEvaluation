<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\SousCategoriesModel;


class ListSousCategorie extends BaseController
{

    public function __construct()
    {

        $this->modelSousCategorie = new SousCategoriesModel();

    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index()
	{

        $data = [

            'modelSousCategorie' => $this->modelSousCategorie->findAll(), // pour la boucle listSousCategorie
        ];
	
		echo view('common/HeaderAdmin');
		echo view('admin/AddSousCategorie', $data);
		echo view('admin/ListSousCategorie', $data);
		echo view('common/FooterAdmin');
	}
	/* **************************************************************************************************** *
	 *          *         *         *         *REGISTER *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function save($id=null)
    {
         //définir le formulaire de validation des règles / set rules validation form
        $rules = [
            'SouscategorieNom'  	=> 'required',
        ];
         
        if($this->validate($rules)){
            $modelSousCategorie = new SousCategoriesModel();
            $data  = [
                'sous_categorie_name'     => $this->request->getVar('SousCategorieNom'),
            ];
            $modelSousCategorie->save($data);
            return redirect()->to('/listSousCategorie');
        }else{
            $data['validation'] = $this->validator;
            echo view('ListSousCategorie', $data);
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
        $this->modelSousCategorie->where('sous_categorie_id', $id)->delete();
        /* REDIRECTION */
        return redirect()->to('/Admin/ListSousCategorie/');
        // header('Location: '.base_url('/Admin/ListSousCategorie/'));
    }

}