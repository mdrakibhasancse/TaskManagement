@extends('layouts.app')
@section('title','create')
@section('content')
   <h1>Create Task :: </h1>
   <hr>
    @if($errors->any())
     <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
          </ul>
     </div>
    @endif

   <form action="{{url('tasks')}}" method="post">
    @csrf
        <div class="form-group">
          <label for="name">Task Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Task Name">
        </div>

        <div class="form-group">
            <label for="category_id">Category Name</label>
             <select name="category_id" id="category_id" class="form-control">
                <option value="">---selected category---</option>
                 @foreach($category_list as $category)
                   <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                   @endforeach
             </select>
        </div>

        <div class="form-group">
           <label for="details">Task Details</label>
           <textarea name="details" class="form-control" id="" cols="30" rows="10">{{old('details')}}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Task Status</label>
             <select name="status" id="status" class="form-control">
                 <option value="">---selected status---</option>
                 @foreach ($task_status as $value => $description)
                     <option value="{{ $value }}" {{ old('status')==strval($value)  ? 'selected' : '' }}>{{ $description }}</option>
                 @endforeach
             </select>
        </div>

        <div class="form-group">
            <label for="deadline">Task Deadline</label>
            <input type="date" class="form-control" id="deadline" value="{{old('deadline')}}" name="deadline">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
   </form>

@endsection
