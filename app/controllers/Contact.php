<?php

class Contact
{
    use Controller;

    public function index()
    {
        $data['user'] = 'Adam';
        $this->view('contact', $data);
    }
}

