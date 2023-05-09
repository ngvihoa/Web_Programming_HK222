<?php

class Home
{
    use Controller;

    public function index()
    {
        // show("Index function");
        $this->view('home');
    }


}

