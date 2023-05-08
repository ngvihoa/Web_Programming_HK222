<?php

class Contact
{
    use Controller;

    public function index()
    {
        // show("Index function");
        $this->view('contact');
    }


}

