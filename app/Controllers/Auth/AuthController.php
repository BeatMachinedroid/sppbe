<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Users;
use Carbon\Carbon;
class AuthController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('layout/Auth/register');
    }

    public function login()
    {
        helper(['form']);
        return view('layout/Auth/login');
    }

    public function profil()
    {
        $session = session();
        return view('layout/Auth/profil');
    }

    public function register()
    {
        Carbon::setLocale('id_user');
        helper(['form']);
        $rules = [
            'username'          => 'required|min_length[2]|max_length[50]',
            'email'             => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'          => 'required|min_length[4]|max_length[50]',
            'confirmpassword'   => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new Users();
            $data = [
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $userModel->save($data);
            return redirect()->to(base_url('/'));
        }else{
            $data['validation'] = $this->validator;
            echo view('layout/Auth/register', $data);
        }
    }

    public function proses()
    {
        $session = session();
        $userModel = new Users();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id_user' => $data['id_user'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'role' => $data['role'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('dashboard'));
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to(base_url('/'));
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function acount()
    {
        $pager = \Config\Services::pager();
        $user = new Users();
        $data['user'] = $user->paginate(5, 'user');
        $data['pager'] = $user->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        return view('layout/akun/acount', $data);
    }

    public function edit(){
        $session = session();
        $userModel = new Users();
            $data = [
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $userModel->save($data);
            return redirect()->to(base_url('/'));
    }
}
