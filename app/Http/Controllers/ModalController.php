<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Gallery;
use App\Reviews;
use Illuminate\Queue\RedisQueue;

class ModalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }


    public function signIn()
    {
        return view('modal.sign_in');
    }

    public function register()
    {
        return view('modal.register');
    }

    public function resetPassword()
    {
        return view('modal.reset_password');
    }

    public function submit()
    {
        return view('modal.submit');
    }
}
