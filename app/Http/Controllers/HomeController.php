<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $mails = \App\MailingLists::with(['mail_service' => function ($query)
        {
            return $query->where('user_id', Auth::user()->id);
        }])->get();
        return view('dashboard', compact('mails'));
    }
}
