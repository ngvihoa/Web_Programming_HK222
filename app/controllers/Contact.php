<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class Contact
{
    use MainController;

    public function index()
    {
        $data['user'] = 'Adam';
        $this->view('contact', $data);
    }
}

