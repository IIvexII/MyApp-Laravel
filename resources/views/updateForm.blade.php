@extends('layouts.app')

@section('content')
   <div class="col-4"></div>
   <div class="col-4">
       <div class="container shadow mt-3 rounded bg-dark text-light">
            <form action="/update" method="post" class="form mt-5">
                {{ csrf_field() }}
                <h1 class="pt-3">Update Post</h1>
                <input hidden name="id" value="{{$post->id}}" placeholder="Post Title" type="text"  id="title" class="form-control" readonly>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" value="{{$post->title}}" placeholder="Post Title" type="text"  id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" placeholder="Post Content" class="form-control" id="content" cols="30" rows="10" style="resize: none">{{$post->content}}</textarea>
                </div>
                <div class="pb-3">
                    <input type="submit" value="submit" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
   <div class="col-4"></div>
@endsection