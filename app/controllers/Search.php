<?php

class Search
{
    use Controller;

    public function index()
    {
        $data['user'] = "Adam";

        $data['error_no_found'] = false;

        $this->view('search', $data);
    }




}

