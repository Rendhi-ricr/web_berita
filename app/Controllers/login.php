<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\userModels;

class login extends BaseController
{
    protected $userModels;
    public function __construct()
    {
        $this->userModels = new userModels();
    }
    public function index()
    {
        $user = $this->userModels->findAll();;
        $data = [
            'title' => 'Data user',
            'user' => $user
        ];
        return view('pages/auth/login', $data);
    }

    public function logout()
    {

        $session = session();

        $session->destroy();

        return redirect()->to('login');
    }

    public function auth()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->userModels->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_user'       => $data['id_user'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                // dd(session('username'));
                return redirect()->to('admin/home');
            } else {
                $session->setFlashdata('msg', 'Password salah!');
                return redirect()->back()->withInput();
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan!');
            return redirect()->back()->withInput();
        }
    }
}
