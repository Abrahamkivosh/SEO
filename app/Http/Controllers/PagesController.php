<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addclient()
    {
        return view('pages.addclient');
    }

    public function mail_compose()
    {
        return view('mail.mail-compose');
    }

    public function mail_inbox()
    {
        return view('mail.mail-inbox');
    }

    public function mail_single()
    {
        return view('mail.mail-single');
    }

    public function upload()
    {
        return view('admins.upload');
    }
}
