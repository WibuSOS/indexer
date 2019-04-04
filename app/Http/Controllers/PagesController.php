<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;
use App\Project;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function dashboard(){
        $user = User::find(auth()->user()->id);
        $data = array('project_posted' => $user->project_posted,
                    'project_taken' => $user->project_taken,
                    'wallet' => $user->wallet,
                    'username' => $user->name
        );

        return view('users.dashboard')->with($data);
    }
}