<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


   
    public function adminHome(){
        return view('admin.dashboard-admin');
    }

    public function adminAccounts(){
        return view('admin.accounts-admin');
    }





    
    
    public function darabHome()
    {
        return view('home',["msg"=>"Hello! I am darab"]);
    }


    public function legalHome()
    {
        return view('home',["msg"=>"Hello! I am legal"]);
    }


    public function recordsHome()
    {
        return view('home',["msg"=>"Hello! I am records"]);
    }


    public function personnelHome()
    {
        return view('home',["msg"=>"Hello! I am personnel"]);
    }


    public function planningHome()
    {
        return view('home',["msg"=>"Hello! I am planning"]);
    }


    public function gsuHome()
    {
        return view('home',["msg"=>"Hello! I am gsu"]);
    }


    public function casheringHome()
    {
        return view('home',["msg"=>"Hello! I am cashering"]);
    }


    public function budgetHome()
    {
        return view('home',["msg"=>"Hello! I am budget"]);
    }


    public function accountingHome()
    {
        return view('home',["msg"=>"Hello! I am accounting"]);
    }

}
