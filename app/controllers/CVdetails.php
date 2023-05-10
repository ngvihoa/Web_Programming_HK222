<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class CVdetails
{
    use MainController;

    public function index($cvId)
    {
        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');

        $data['cvId'] = $cvId;

        $this->view('cvdetails', $data);
    }


}

