@extends('layouts.app')
@section('title','Edit')
@section('content')
   <h1>Edit Category :: </h1>
   <hr>
   <form action="{{url("/categories/$category->id")}}" method="post">
    @csrf
    @method('put')
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" value="{{ $category->name }}" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
   </form>

@endsection
