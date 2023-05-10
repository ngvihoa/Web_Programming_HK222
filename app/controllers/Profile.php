<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class Profile
{
    use MainController;

    public function index()
    {
        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');
            $data['email'] = $ses->user('email');
            $data['phone'] = $ses->user('phone');

        $data['p'] = 'profile_user';
        $data['active_CV'] = '';
        $data['active_User'] = 'active';

        $this->view('profile', $data);
    }

    public function profile_user(){

        $data = [];
        $ses = new \Core\Session;
        // show($ses->user());
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');
            $data['email'] = $ses->user('email');
            $data['phone'] = $ses->user('phone');


        $data['p'] = 'profile_user';
        $data['active_CV'] = '';
        $data['active_User'] = 'active';
        $this->view('profile', $data);
    }

    public function profile_cv(){

        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');

        $data['p'] = 'profile_cv';
        $data['active_CV'] = 'active';
        $data['active_User'] = '';   
        
        // check the CV_id
        $data['cvId'] = 99999;
        
        $this->view('profile', $data);
    }

    public function delete_cv(){

        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');

        $data['p'] = 'profile_cv';
        $data['active_CV'] = 'active';
        $data['active_User'] = '';   
        
        // delete the CV_id
        unset($data['cvId']);
        
        $this->view('profile', $data);
    }


}

