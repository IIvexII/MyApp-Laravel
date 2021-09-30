@extends('layouts.app')

@section('content')
   <div class="col-4"></div>
   <div class="col-4">
       <div class="container shadow mt-3 rounded bg-dark text-light">
            <form action="/post/create" method="post" class="form mt-5">
                {{ csrf_field() }}
                <h1 class="pt-3">Create Post</h1>
                <div class="mb-3">
                    <label for="title" class="form-label">Users</label>
                    <select class="form-select" name='user_id' aria-label="Default select example">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" placeholder="Post Title" type="text"  id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" placeholder="Post Content" class="form-control" id="content" cols="30" rows="5" style="resize: none"></textarea>
                </div>
                <div class="pb-4">
                    <input type="submit" value="Create" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
   <div class="col-4"></div>
@endsection