@extends('layouts.master')

@section('content')
    {{-- <h1>Project List</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->project_name}}</a></h3>
                <small>Submitted on {{$post->created_at}}</small>
            </div>
        @endforeach
        <div class="text-xs-center">{{$posts->links()}}</div>
    @else
    <div class="well">No project found</div>
    @endif --}}
    
    <div class='container'>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class ="card">
                        <div class="card-header">Projects</div>
        
                        <div class="card-body">
                            @if(count($posts) > 0)
                                @foreach ($posts as $post)
                                    <div class="well">
                                        <h3><a href="/projects/{{$post->id}}">{{$post->project_name}}</a></h3>
                                        <small>Submitted by {{$post->user_employer['name']}}</small>
                                    </div>
                                    <br>
                                @endforeach
                                <div class="text-xs-center">{{$posts->links()}}</div>
                            @else
                                <div class="text-xs-center">No project yet...</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection