@extends('layouts.master')

@section('content')
    <h1>Edit Project</h1>
    {{-- {!! Form::open(['action' => ['ProjectController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('project_name', 'Project name')}}
            {{Form::text('project_name', $post->project_name, ['class' => 'form_control', 'placeholder' => 'Project'])}}
            
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $post->description, ['class' => 'form_control', 'placeholder' => 'Describe your project'])}}
            
            {{Form::label('project_fee', 'Project fee')}}
            {{Form::number('project_fee', $post->project_fee, ['class' => 'form_control', 'placeholder' => 'In Rupiah'])}}
        </div>
        {{Form::hidden( '_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update a Project') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('projects.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Project_name" class="col-md-4 col-form-label text-md-right">{{ __('Project Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="project_name" placeholder="Project" value={{ $post->project_name }} required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                <div class="col-md-6">
                                    <input id="desc" type="text" class="form-control" name="description" placeholder="Describe your project" value={{ $post->description }}>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Fee" class="col-md-4 col-form-label text-md-right">{{ __('Project Fee') }}</label>
    
                                <div class="col-md-6">
                                <input id="fee" type="number" class="form-control{{ $errors->has('fee') ? ' is-invalid' : '' }}" name="project_fee" placeholder="Fee" value={{ $post->project_fee }} required>
    
                                    @if ($errors->has('fee'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fee') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Skill" class="col-md-4 col-form-label text-md-right">{{ __('Programming Skill') }}</label>
    
                                <div class="col-md-6">
                                <input id="skill_req" type="text" class="form-control{{ $errors->has('skill_req') ? ' is-invalid' : '' }}" name="skill" placeholder="Skill required" value={{ $post->skill['skill'] }} required>
    
                                    @if ($errors->has('skill_req'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('skill_req') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection