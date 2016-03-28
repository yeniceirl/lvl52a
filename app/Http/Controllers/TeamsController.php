<?php

namespace App\Http\Controllers;

use App\Match;
use App\Team;
use App\Http\Requests;

class TeamsController extends Controller
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
     * Teams List view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Groups List view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function groups()
    {
        $teams = Team::orderBy('group', 'asc')->get();
        return view('teams.groups', ['teams' => $teams]);
    }

    /**
     * Matches List view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function matches()
    {
        $matches = Match::all();
        //dd ($matches);
        return view('teams.matches', ['matches' => $matches]);
    }

    /**
     * Teams Details view
     *
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showTeams($name)
    {
        $team = Team::where('name', $name)->firstOrFail();
        return view('teams.showTeams', ['team' => $team]);
    }
}
