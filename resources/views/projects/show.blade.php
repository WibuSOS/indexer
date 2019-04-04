@extends('layouts.master')

@section('content')

<div class='container'>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class ="card">
                    <div class="card-header">{{$post->project_name}}</div>
    
                    <div class="card-body">
                        <h5>{!!$post->description!!}</h5>
                        <br>
                        <h6>Project fee: Rp{{$post->project_fee}}</h6>
                        <br>
                        <h6>Submitted by {{$post->user_employer['name']}}</h6>
                        <br>
                        <a href="/projects" class="btn btn-primary">Back</a>
                        <br>
                        <br>
                        <form action="{{url('accept')}}">
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <button type="submit" class="btn btn-primary">Accept</button>
                        </form>              
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection