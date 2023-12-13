@extends('layouts.app')
@section('title','Category')
@section('content')


 <a class="btn btn-success" href="{{url('/categories/create')}}">Add new Category</a>
  <h1>Show Category List : </h1>
  <hr>
  <table class="table table-bordered table-striped">
         <tr>
             <td>Category Name</td>
             <td>Action</td>
         </tr>

         @foreach ($category_list as $category)
         <tr>
            <td>{{ $category->name }}</td>
            <td>
                <div class="btn-style">
                     <div class="edit-btn">
                         <a href="{{url("categories/$category->id/edit")}}" class="btn btn-warning">Edit</a>
                     </div>

                     <div class="delete-btn">
                        <form action="{{url("categories/$category->id")}}" method="post">
                            @csrf
                            @method('delete')
                             <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                        </form>
                     </div>
                </div>
            </td>
         </tr>
         @endforeach

  </table>
@endsection
