<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($locale = '')
    {
        if ($locale === ''){
            session()->keepFlashdata('info');
            return redirect()->to($this->locale);
        }
        $this->request->setLocale($locale);
        session()->set('locale', $locale);
        return view("Home/index");
    }
}

