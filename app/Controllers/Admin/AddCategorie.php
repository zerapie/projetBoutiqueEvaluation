<?php	namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\models\Categorie;
use App\models\SousCategorie;


class AddCategorie extends BaseController
{
	public function index()
	{

	
		echo view('common/HeaderAdmin');
		echo view('admin/AddCategorie');
		echo view('common/FooterAdmin');
	}
	/* **************************************************************************************************** *
	 *          *         *         *         *REGISTER *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function save()
    {
        //définir le formulaire de validation des règles / set rules validation form
        $rules = [
            'user_first_name' 	=> 'required',
            'user_last_name'  	=> 'required',
        ];
         
        if($this->validate($rules)){
            $model = new AddCategorieModel();
            $data = [
                'user_first_name'    => $this->request->getVar('user_first_name'),
                'user_last_name'     => $this->request->getVar('user_last_name'),
            ];
            $model->save($data);
            return redirect()->to('/listcategorie');
        }else{
            $data['validation'] = $this->validator;
            echo view('AddCategorie', $data);
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
                     /* SUPPRETION D'UNE LIGNE PAR ID*/
                     $this->AddCategorieModel->where('id', $id)->delete();
                     /* REDIRECTION */
                     return redirect()->to('/Admin/ListeCategorie/');
                     // header('Location: '.base_url('/Admin/ListeCategorie/'));
         
    }

}