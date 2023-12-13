@extends('layouts.app')
@section('title','Create')
@section('content')
   <h1>Create Category :: </h1>
   <hr>
    @if($errors->any())
     <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
     </div>
    @endif

   <form action="{{url('categories')}}" method="post">
    @csrf
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
   </form>

@endsection
