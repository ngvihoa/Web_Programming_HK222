<?php

class Create_cv
{
    use Controller;

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

