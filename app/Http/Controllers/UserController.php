<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;
use App\Project;

class UserController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        return view('users.edit')->with('user', $user);
        // return view('users.profile')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     return view ('users.edit')->with('user', User::find($id));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'skill' => 'required'
        ]);

        // Find Skill
        $skill_id = Skill::where('skill', $request->input('skill'))->value('id');
        if(!$skill_id){
            $skill_inst = new Skill;
            $skill_inst->skill = $request->input('skill');
            $skill_inst->save();

            $skill_id = Skill::where('skill', $request->input('skill'))->value('id');
        }

        // Find User
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->skill_id = $skill_id;
        $user->save();

        return redirect('/dashboard')->with('success', 'Profile updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $user = User::find($id);
    //     $user->delete();
    //     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    //     {{ __('Logout') }}
    //     </a>
    //     return redirect('/');
    // }
}
