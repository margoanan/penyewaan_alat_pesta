<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\Auth_model;
 
class Register extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('register');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new Auth_model();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $ses_data = [
            'name'     => $this->request->getVar('nama'),
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $model->insert($ses_data);
        return redirect()->to('/login');

    }
 
	public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}