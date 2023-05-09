<?php

class Profile
{
    use Controller;

    public function index()
    {
        $data['user'] = "Adam";

        $data['p'] = 'profile_user';
        $data['active_CV'] = '';
        $data['active_User'] = 'active';

        $this->view('profile', $data);
    }

    public function profile_cv(){

        $data['user'] = "Adam";


        $data['p'] = 'profile_cv';
        $data['active_CV'] = 'active';
        $data['active_User'] = '';   
        
        // check the CV_id
        $data['cvId'] = 99999;
        
        $this->view('profile', $data);
    }

    public function profile_user(){

        $data['user'] = "Adam";

        $data['p'] = 'profile_user';
        $data['active_CV'] = '';
        $data['active_User'] = 'active';
        $this->view('profile', $data);
    }

    public function delete_cv(){
        $data['user'] = "Adam";

        $data['p'] = 'profile_cv';
        $data['active_CV'] = 'active';
        $data['active_User'] = '';   
        
        // delete the CV_id
        unset($data['cvId']);
        
        $this->view('profile', $data);
    }


}

