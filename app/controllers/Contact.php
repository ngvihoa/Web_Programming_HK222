<?php
namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class Contact
{
    use MainController;

    public function index()
    {
        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');
        
            $this->view('contact', $data);
    }
}
