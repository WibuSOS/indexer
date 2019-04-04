<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Skill;

class ProjectController extends Controller
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
        $projects = Project::where('employer_id', '!=', auth()->user()->id)->where('employee_id', NULL)->orderBy('project_name', 'asc')->paginate(4);
        return view('projects.index')->with('posts', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_name' => 'required',
            'project_fee' => 'required',
            'skill' => 'required'
        ]);

        // Find Skill
        $skill_id = Skill::where('skill', $request->input('skill'))->value('id');
        if(!$skill_id){
            $skill_inst = new Skill;
            $skill_inst->skill = $request->input('skill');
            $skill_inst->save();

            $skill_id = Skill::where('skill', $request->input('skill'))->value('id');
            // $skill_id = DB::table('skills')->where('skill', $data['skill'])->value('id');
        }

        // Create Project
        $post = new Project;
        $post->project_name = $request->input('project_name');
        $post->description = $request->input('description');
        $post->project_fee = $request->input('project_fee');
        $post->skill_id = $skill_id;
        $post->employer_id = auth()->user()->id;
        $post->save();

        return redirect('/dashboard')->with('success', 'Project posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Project::find($id);
        return view('projects.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Project::find($id);
        return view('projects.edit')->with('post', $post);
    }

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
            'project_name' => 'required',
            'description' => 'required',
            'project_fee' => 'required'
        ]);

        $skill_id = Skill::where('skill', $request->input('skill'))->value('id');
        if(!$skill_id){
            $skill_inst = new Skill;
            $skill_inst->skill = $request->input('skill');
            $skill_inst->save();

            $skill_id = Skill::where('skill', $request->input('skill'))->value('id');
            // $skill_id = DB::table('skills')->where('skill', $data['skill'])->value('id');
        }

        // Find Post
        $post = Project::find($id);
        $post->project_name = $request->input('project_name');
        $post->description = $request->input('description');
        $post->project_fee = $request->input('project_fee');
        $post->skill_id = $skill_id;
        $post->save();

        return redirect('/dashboard')->with('success', 'Project updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Project::find($id);
        $post->delete();
        return redirect('/dashboard')->with('success', 'Project removed');
    }

    public function accept(Request $request){
        $id = $request->input('post_id');
        $user = auth()->user();

        $project = Project::find($id);
        $project->employee_id = $user["id"];
        $project->save();

        return redirect('/projects')->with('success', 'Project accepted');
    }

    public function search(Request $request){
        $query = $request->input('query');
        $skill_id = Skill::where('skill', $query)->value('id');
        if($skill_id)
            $projects = Project::where('skill_id', $skill_id)->paginate(4);
        else
            $projects = Project::where('project_name','LIKE','%'.$query.'%')->paginate(4);
        
        return view('projects.index')->with('posts', $projects);
    }
}