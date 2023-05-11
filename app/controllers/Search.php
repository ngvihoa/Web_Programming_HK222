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
      
        $search = new \Model\Cv;
        $req = new \Core\Request;
        $data['countries']=$search->query("select distinct country from cv"); 
        $data['jobtitle']=$search->query("select distinct jobtitle from cv");
        if($ses->is_logged_in())
            $data['user'] = $ses->user('username');
        // show($_POST);
        $result= $search->search();
        if($req->post('country')||$req->post('jobtitle')||$req->post('firstname')||$req->post('degree')){
            $result = $search->search($_POST);
            // show($result);
        }
        
        $data['searchValue'] = $result;
        $this->view('search',$data);

    }

}
