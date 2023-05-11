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
            
        // check the CV_id
        // show($cvId);
        $cv = new \Model\CV_;
        $data['cv'] = $cv->first(['cvid'=>$cvId]);
        // show($data);
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
            // show($data);

        }


        $this->view('cvdetails', $data);
    }


}
