@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
                @foreach ($users as $user)
                    <div class="card ms-5 mt-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$user->name}}</h5>                                    
                            <a href="/user/{{$user->id}}/posts" class="btn btn-danger btn-sm mt-3">View Posts</a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection