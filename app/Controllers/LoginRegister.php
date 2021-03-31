<?php	namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\LoginRegisterModel;


class LoginRegister extends BaseController
{
	/* **************************************************************************************************** *
	 *          *         *         *         *  INDEX  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function index()
	{
		$data = [
            'afLogin'     =>true, // affiche login
            'afresgister' =>true, // affiche register
			'session' => session(),
        ];
	
		echo view('common/Header', $data);
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
            // 'user_last_name' 	=> 'required|min_length[3]|max_length[20]',
            // 'user_email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            // 'user_password'      => 'required|min_length[6]|max_length[200]',
            // 'user_conf_password' => 'matches[password]',
        ];
         
        if($this->validate($rules)){
            $model = new LoginRegisterModel();
            $data = [
                'user_first_name'     => $this->request->getVar('user_first_name'),
                'user_last_name'     => $this->request->getVar('user_last_name'),
                'user_email'    => $this->request->getVar('user_email'),
                'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/loginregister');
        }else{
            $data['validation'] = $this->validator;
            echo view('loginregister', $data);
        }
         
    }
	/* **************************************************************************************************** *
	 *          *         *         *         *  LOGIN  *         *         *         *         *         * *
	 * **************************************************************************************************** */
	public function auth()
    {
        $session = session();
        $model = new LoginRegisterModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                // dd("teste1");
                $ses_data = [
                    'user_id'           => $data['user_id'],
                    // 'user_first_name'   => $data['user_first_name'],
                    // 'user_last_name'    => $data['user_last_name'],
                    'user_email'        => $data['user_email'],
                    'logged_in'         => TRUE
                ];
                $session->set($ses_data);
                // dd("test OK");
                return redirect()->to('/home');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                // dd("teste ERROR password");
                return redirect()->to('/loginregister');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            // dd("teste ERROR email");
            return redirect()->to('/loginregister');
        }
    }
	/* **************************************************************************************************** *
	 *          *         *         *         * LOGOUT  *         *         *         *         *         * *
	 * **************************************************************************************************** */
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/loginregister');
    }
}