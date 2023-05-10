<?php
namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
class Search
{
    use MainController;

    public function index()
    {
        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');


        $data['error_no_found'] = false;

        $this->view('search', $data);
    }




}

