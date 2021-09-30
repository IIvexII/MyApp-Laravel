@extends('layouts.app')

@section('content')
   <div class="col-4"></div>
   <div class="col-4">
       <div class="container shadow mt-3 rounded bg-dark text-light">
            <form action="/user/create" method="post" class="form mt-5">
                {{ csrf_field() }}
                <h1 class="pt-3">Create User</h1>
                <div class="mb-3">
                    <label for="title" class="form-label">Name</label>
                    <input name="name" placeholder="Name" type="text"  id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Password</label>
                    <input name="password" placeholder="Password" type="password"  id="title" class="form-control">
                </div>
                <div class="pb-3">
                    <input type="submit" value="Create" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
   <div class="col-4"></div>
@endsection