@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h4>Project Posted</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class = "table table-striped">
                        <tr>
                            <th>Project Name</th>
                            <th>Fee</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($project_posted as $project_post)
                            <tr>
                                <th>{{$project_post->project_name}}</th>
                                <th>Rp{{$project_post->project_fee}}</th>
                                <th><a href="/projects/{{$project_post->id}}/edit" class = 'btn btn-primary'>Edit</a></th>
                                <th>
                                    {!!Form::open(['action' => ['ProjectController@destroy', $project_post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::Submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </th>
                            </tr>
                        @endforeach
                    </table>
                    <a href="/projects/create" class="btn btn-primary">Post a project</a>
                </div>

                <div class="card-body">
                        <h4>Project Taken</h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class = "table table-striped">
                            <tr>
                                <th>Project Name</th>
                                <th>Fee</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($project_taken as $project_take)
                                <tr>
                                    <th>{{$project_take->project_name}}</th>
                                    <th>Rp{{$project_take->project_fee}}</th>
                                    <th>
                                        {{-- <a href="#" class = 'btn btn-primary'>Done</a> --}}
                                    </th>
                                    <th>
                                        {!!Form::open(['action' => ['ProjectController@destroy', $project_take->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::Submit('Done', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
