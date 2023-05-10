<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class Search
{
    use MainController;

    public function index()
    {
        $data['user'] = "Adam";

        $data['error_no_found'] = false;

        $this->view('search', $data);
    }




}

