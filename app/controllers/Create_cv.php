<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class Create_cv
{
    use MainController;

    public function index()
    {
        $this->view('create_cv');
    }

    public function insert_cv()
    {
        redirect('profile/profile_cv');
    }

    public function edit_cv()
    {
        $this->view('edit_cv');
    }


}

