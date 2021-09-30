@extends('layouts.app')

@section('content')

<div class="col-4"></div>
<div class="col-4">
    <div class="card ms-5 mt-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
        </div>
    </div>
</div>
<div class="col-4"></div>
    
@endsection