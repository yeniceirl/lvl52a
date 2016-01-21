<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Match;
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
     * @return Response
     */
    public function index()
    {
        //return view('home');

        dd(Match::first()->teams->toarray());

        //dd(Player::find(3)->team);
    }
}
