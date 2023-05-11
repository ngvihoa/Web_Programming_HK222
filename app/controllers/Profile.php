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
        if($ses->is_logged_in()){
            $data['user'] = $ses->user('username');
            $data['email'] = $ses->user('email');
            $data['phone'] = $ses->user('phone');
        }
        $data['p'] = 'profile_user';
        $data['active_CV'] = '';
        $data['active_User'] = 'active';

        $this->view('profile', $data);
    }

    // public function profile_user(){

    //     $data = [];
    //     $ses = new \Core\Session;
    //     // show($ses->user());
    //     if($ses->is_logged_in())
    //         $data['user'] = $ses->user('username');
    //         $data['email'] = $ses->user('email');
    //         $data['phone'] = $ses->user('phone');


    //     $data['p'] = 'profile_user';
    //     $data['active_CV'] = '';
    //     $data['active_User'] = 'active';
    //     $this->view('profile', $data);
    // }

    public function profile_cv(){

        $data = [];
        $ses = new \Core\Session;
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');
            
        // check the CV_id
        $cv = new \Model\CV_;
        $data['cv'] = $cv->first(['userid'=>$ses->user('userID')]);
        if($data['cv']){
            $data['cvId'] = $data['cv']->cvid;
            $data['re'] = [];
            $data['we'] = [];
            $data['de'] = [];
            $data['ce'] = [];

            $re = new \Model\References;    
            $we = new \Model\WorkExp;    
            $de = new \Model\Degree;    
            $ce = new \Model\Certificates;  
            
            // get ref, we, de, ce, personal
            $data['re'] = $re->where(['cvid'=>$data['cvId']]);
            $data['we'] = $we->where(['cvid'=>$data['cvId']]);
            $data['de'] = $de->where(['cvid'=>$data['cvId']]);
            $data['ce'] = $ce->where(['cvid'=>$data['cvId']]);

            // show($data['re']);
            // show($data['we']);
            // show($data['de']);
            // show($data['ce']);
        }

        $data['p'] = 'profile_cv';
        $data['active_CV'] = 'active';
        $data['active_User'] = '';   
        
        
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
        
        // delete the CV
        // delete refs -> wes -> eds -> certs -> 
        $cv = new \Model\CV_;
        $check = $cv->first(['userid'=>$ses->user('userID')])->cvid;
        $re = new \Model\References;
        $re->delete($check, 'cvid');

        $we = new \Model\WorkExp;
        $we->delete($check, 'cvid');

        $de = new \Model\Degree;
        $de->delete($check, 'cvid');

        $ce = new \Model\Certificates;
        $ce->delete($check, 'cvid');

        $cv->delete($ses->user('userID'), 'userid');

        unset($cvId);
        
        $this->view('profile', $data);
    }


}
