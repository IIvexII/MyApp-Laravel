@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
                @foreach ($posts as $post)
                    <div class="card ms-5 mt-3" style="width: 18rem;">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">{{$post->title}}</h5>
                                    </div>
                                    <div class="col-2">
                                        <a href="/delete/{{$post->id}}">
                                            <img src="{{asset('icons/delete.png')}}"  width="16px" alt="">
                                        </a>
                                    </div>
                                    <div class="col-2">
                                        <a href="/update/{{$post->id}}">
                                            <img src="{{asset('icons/edit.png')}}" width="16px" alt="">
                                        </a>
                                    </div>
                                </div>
                            <p class="card-text">{{$post->content}}</p>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection