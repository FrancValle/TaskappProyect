<?php

namespace App\Controllers;

use JetBrains\PhpStorm\Language;

class Login extends BaseController
{

    public function new(){

        return view('Login/new');
    }

    public function create(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $remember_me = (bool) $this->request->getPost('remember_me');

        $auth = service('auth');

        if ($auth->login($email, $password, $remember_me)){

            $redirect_url = session('redirect_url') ?? '/';

            unset($_SESSION['redirect_url']);

            return redirect()->to($redirect_url)
                             ->with('info',Lang('Login.successful'))
                             ->withCookies();
        }else{
            return redirect()->back()
                             ->withInput()
                             ->with('warning',Lang('Login.invalid'));

        }

    }
    public function delete(){

        service('auth')->logout();


        return redirect()->to('/Login/showLogoutMessage')
                         ->withCookies();
    }
    public function showLogoutMessage(){

        return redirect()->to('/')
                          ->with('info',lang('Login.logout_successful'));
    }
}