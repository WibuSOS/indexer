@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create a Project') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('projects.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="Project_name" class="col-md-4 col-form-label text-md-right">{{ __('Project Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="project_name" placeholder="Project" required autofocus>
    
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
                                    <input id="desc" type="text" class="form-control" name="description" placeholder="Describe your project">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Fee" class="col-md-4 col-form-label text-md-right">{{ __('Project Fee') }}</label>
    
                                <div class="col-md-6">
                                    <input id="fee" type="number" class="form-control{{ $errors->has('fee') ? ' is-invalid' : '' }}" name="project_fee" placeholder="Fee" required>
    
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
                                    <input id="skill_req" type="text" class="form-control{{ $errors->has('skill_req') ? ' is-invalid' : '' }}" name="skill" placeholder="Skill required" required>
    
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
                                        {{ __('Create') }}
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