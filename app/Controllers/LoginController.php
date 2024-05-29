<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Auth_model;

class LoginController extends BaseController
{
	public function index()
	{
		return view('login');
	}

	public function doLogin()
	{
		$email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
		
		$user = new Auth_model();
		$data = $user->where('email', $email)->first();
		if( $data )
		{
			$session = session();
			if( password_verify($password, $data['password']) )
			{
				// echo '3';
				$login = [
                            'islogin' => true,
							'email'=> $data['email'],
							'password' => $data['password']
						];
				$session->set($login);
				return redirect()->to('/dashboard');

			}else{
				// echo '2';
				$session->setFlashdata('msg', 'Email/Password invalid');
                return redirect()->to('/login');
			}
		}
	}

	public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}