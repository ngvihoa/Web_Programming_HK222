<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');

class Create_cv
{
    use MainController;

    public function index($cvId)
    {
        $data = [];
      
        $data['personal'] = new \Model\CV; // take care: firstname, lastname, city, country, jobtitle, hobby, userid
        $data['we'] = new \Model\WorkExp; // take care: jobtitle, starttime, endtime, company, description, country, cvid
        $data['ce'] = new \Model\Certificates; // take care: namecert, time, organization, description, cvid
        $data['ed'] = new \Model\Degree; // take care: namedegree, gradtime, school, description, cvid
        $data['re'] = new \Model\References; // take care: refname, company, relationship, phone, email, cvid

        $req = new \Core\Request;
        if($req->posted()) // check case submit 
		{

			//get data first
            $ses = new \Core\Session;

            $pe = [
                'firstname' => $_POST['fname'],
                'lastname' => $_POST['lname'],
                'city' => $_POST['city'],
                'country' => $_POST['country'],
                'hobby' => $_POST['hobby'],
                'jobtitle' => $_POST['job'],
                'userid' => $ses->user('userID')
            ];

            // show($pe);

            $tt = $data['personal']->vld($pe);
             
            // echo false;
            // show($tt);

            if($tt){ // check personal details and jobtitle, hobby also
                // show($_SESSION);
                // show($_POST);
                // check references
                $refl = []; //list
                $i = 0;
                // get all ref form
                while(isset($_POST['refname'.$i]) && 
                        (!empty($_POST['refname'.$i]) || 
                        !empty($_POST['refcomp'.$i]) ||
                        !empty($_POST['rel'.$i]) ||
                        !empty($_POST['refphone'.$i]) ||
                        !empty($_POST['refmail'.$i]))){
                    $tmp = [
                        'refname' => $_POST['refname'.$i],
                        'company' => $_POST['refcomp'.$i],
                        'relationship' => $_POST['rel'.$i],
                        'phone' => $_POST['refphone'.$i],
                        'email' => $_POST['refmail'.$i],
                        'cvid' => ''
                    ];
                    array_push($refl, $tmp);
                    $i += 1;
                }

                // check ref list > 0
                if(sizeof($refl)){
                    
                    $isinsert = true;
                    // check ref element validate
                    for($ind = 0; $ind < sizeof($refl); $ind++){
                        if(!$data['re']->validate($refl[$ind])){
                            $isinsert = false;
                            break;
                        }
                    }
                    // all element validate
                    if($isinsert){
                        // check if others optional
                        $welist =[];
                        $edlist = [];
                        $celist = [];
                        
                        // check workexp first
                        if($isinsert){
                            $i = 0;
                            // show($_POST);

                            // get all we non empty form
                            while(isset($_POST['jobtitle'.$i]) && 
                                (!empty($_POST['jobtitle'.$i]) || 
                                !empty($_POST['start'.$i]) ||
                                !empty($_POST['end'.$i]) ||
                                !empty($_POST['company'.$i]) ||
                                !empty($_POST['wed'.$i]) ||
                                !empty($_POST['wecountry'.$i]))){
                                    $s = $_POST['start'.$i];
                                    $e = $_POST['end'.$i];
                                    if(!empty($_POST['start'.$i]) ){
                                        $s .= "-01";
                                    }
                                    if(!empty($_POST['end'.$i]) ){
                                        $e .= "-01";
                                    }
                                $tmp = [
                                    'jobtitle' => $_POST['jobtitle'.$i],
                                    'starttime' => $s,
                                    'endtime' => $e,
                                    'company' => $_POST['company'.$i],
                                    'description' => $_POST['wed'.$i],
                                    'country' => $_POST['wecountry'.$i],
                                    'cvid' => ''
                                ];
                                // show($tmp);
                                array_push($welist, $tmp);
                                $i += 1;
                            }
                            // show($welist);
                            for($ind = 0; $ind < sizeof($welist); $ind++){
                                if(!$data['we']->validate($welist[$ind])){
                                    $isinsert = false;
                                    break;
                                }
                            }
                            // show($isinsert);
                        }
                        // show($isinsert);


                        // check degree
                        if($isinsert){
                            // show($_SESSION);
                            // show($_POST);

                            $i = 0;
                            // get all ed non empty form
                            // namedegree, gradtime, school, description, cvid
                            while(isset($_POST['degree'.$i]) && 
                                (!empty($_POST['degree'.$i]) || 
                                !empty($_POST['school'.$i]) ||
                                !empty($_POST['gradate'.$i]) ||
                                !empty($_POST['edd'.$i]))){
                                    $s = $_POST['gradate'.$i];
                                    if(!empty($_POST['gradate'.$i]) ){
                                        $s .= "-01";
                                    }
                                // echo($_POST['gradate'.$i]);
                                $tmp = [
                                    'namedegree' => $_POST['degree'.$i],
                                    'school' => $_POST['school'.$i],
                                    'gradtime' => $s,
                                    'description' => $_POST['edd'.$i],
                                    'cvid' => ''
                                ];
                                array_push($edlist, $tmp);
                                $i += 1;
                            }

                            for($ind = 0; $ind < sizeof($edlist); $ind++){
                                if(!$data['ed']->validate($edlist[$ind])){
                                    $isinsert = false;
                                    break;
                                }
                            }
                        }
                        // show($isinsert);


                        // check certificate
                        if($isinsert){
                            // show($_POST);

                            $i = 0;
                            // get all ed non empty form
                            // take care: namecert, time, organization, description, cvid
                            while(isset($_POST['cert'.$i]) && 
                                (!empty($_POST['cert'.$i]) || 
                                !empty($_POST['org'.$i]) ||
                                !empty($_POST['finish'.$i]) ||
                                !empty($_POST['ced'.$i]))){

                                // $s = !empty($_POST['finish'.$i]) ? $_POST['finish'.$i].'-01' : '';
                                $s = $_POST['finish'.$i];
                                if(!empty($_POST['finish'.$i]) ){
                                    $s .= "-01";
                                }

                                $tmp = [
                                    'namecert' => $_POST['cert'.$i],
                                    'organization' => $_POST['org'.$i],
                                    'time' => $_POST['finish'.$i],
                                    'description' => $_POST['ced'.$i],
                                    'cvid' => ''
                                ];
                                array_push($celist, $tmp);
                                $i += 1;
                            }

                            for($ind = 0; $ind < sizeof($celist); $ind++){
                                if(!$data['ce']->validate($celist[$ind])){
                                    $isinsert = false;
                                    break;
                                }
                            }
                        }

                        // show($isinsert);
                        //======================================================
                        // else do insert & redirect to profile/profile_cv
                        if($isinsert){
                            // echo("jbckajd");
                            // show($_POST);

                            //check if cv exist or not
                            if($data['personal']->first(['userid'=>$ses->user('userID')])){
                                // if true, update
                                $data['personal']->update($ses->user('userID'), $pe, 'userid');
                            }
                            else{
                                //else insert to database
                                $data['personal']->insert($pe);
                            }
                            $cvId = $data['personal']->first(['userid'=>$ses->user('userID')])->cvid; // get cvId      

                            // insert all refs after delete all in database
                            $data['re']->delete($cvId,'cvid');
                            for($ind = 0; $ind < sizeof($refl); $ind++){
                                $refl[$ind]['cvid'] = $cvId;
                                $data['re']->insert($refl[$ind]);
                            }


                            // show($welist);
                            // show($edlist);
                            // show($celist);

                            if(sizeof($welist)){
                                // echo "nckjnalvl";
                                $data['we']->delete($cvId,'cvid');
                                for($ind = 0; $ind < sizeof($welist); $ind++){
                                    $welist[$ind]['cvid'] = $cvId;
                                    $data['we']->insert($welist[$ind]);
                                }
                                // show($welist);
                            }

                            if(sizeof($edlist)){
                                // insert EDs
                                $data['ed']->delete($cvId,'cvid');
                                for($ind = 0; $ind < sizeof($edlist); $ind++){
                                    $edlist[$ind]['cvid'] = $cvId;
                                    $data['ed']->insert($edlist[$ind]);
                                }
                            }

                            if(sizeof($celist)){
                                // insert CEs
                                $data['ce']->delete($cvId,'cvid');
                                for($ind = 0; $ind < sizeof($celist); $ind++){
                                    $celist[$ind]['cvid'] = $cvId;
                                    $data['ce']->insert($celist[$ind]);
                                }
                            }

                            // show($_SESSION);
                            // show($pe);
                            // show($_POST);

                            redirect('profile/profile_cv');
                        }
                    }
                } 
                //===========================================
                 
            }
            
            // $this->view('create_cv', $data);
            // show($_SESSION);
            // show($pe);
            // show($_POST);   
            // show(empty($_POST['refmail2'])? "true" : "false");
            // show(isset($_POST['refmail1']));
            
		}

        // echo $data['personal']->getError('firstname');
        // echo $data['personal']->getError('lastname');
        // echo $data['personal']->getError('city');
        // echo $data['personal']->getError('country');
        // echo $data['personal']->getError('hobby');
        // echo $data['personal']->getError('jobtitle');
        // echo $data['personal']->getError('userid');
        // show($_POST);   

        $this->view('create_cv', $data);
    }

    // public function insert_cv()
    // {
    //     redirect('profile/profile_cv');
    // }

    public function edit_cv()
    {

        $this->view('create_cv');
    }


}
