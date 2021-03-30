<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\LoginRegisterModel;


class LoginRegister extends BaseController
{
	public function index()
	{
		$data = [
            'afLogin'     =>true, // affiche login
            'afresgister' =>true, // affiche register

        ];
	
		echo view('common/Header');
		echo view('LoginRegister', $data);
		echo view('common/Footer');
	}
	/* **************************************************************************************************** *
	 *          *         *         *         *REGISTER *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function save()
    {
        //définir le formulaire de validation des règles / set rules validation form
        $rules = [
            'user_first_name' 	 => 'required|min_length[3]|max_length[20]',
            'user_last_name' 	 => 'required|min_length[3]|max_length[20]',
            'user_email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'user_password'      => 'required|min_length[6]|max_length[200]',
            'user_conf_password' => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  LOGIN  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}