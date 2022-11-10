<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
{
    return view('Template.master') ;
}

public function create()
{
    return view('Account.create') ;
}

public function show()
{
    return view('Account.show') ;
}
}

