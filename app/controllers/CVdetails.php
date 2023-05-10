<?php

class CVdetails
{
    use Controller;

    public function index($cvId)
    {
        // $data['user'] = "Adam";

        $data['cvId'] = $cvId;

        $this->view('cvdetails', $data);
    }


}

