<?php

class Home
{
    use Controller;

    public function index()
    {
        // check cookies,...
        $data['user'] = "Adam";

        $this->view('home', $data);
    }


}

