<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
            'page_title' => view('partials/page-title', ['title' => 'Welcome !', 'pagetitle' => ' '])
        ];
        return view('index', $data);
    }
}
