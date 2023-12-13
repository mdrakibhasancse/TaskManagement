@extends('layouts.app')
@section('title','edit')
@section('content')
   <h1>Edit Task :: </h1>
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

   <form action="{{url("tasks/$task->id")}}" method="post">
    @csrf
    @method('put')
        <div class="form-group">
          <label for="name">Task Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
        </div>

        <div class="form-group">
            <label for="category_id">Category Name</label>
             <select name="category_id" id="category_id" class="form-control">
                @foreach ($category_list as $category)
                    <option value="{{$category->id}}"{{ $category->id==$task->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
             </select>
        </div>

        <div class="form-group">
           <label for="details">Task Details</label>
           <textarea name="details" class="form-control" id="" cols="30" rows="10"> {{ $task->details }} </textarea>
        </div>

        <div class="form-group">
            <label for="status">Task Status</label>
             <select name="status" id="status" class="form-control">
                @foreach ($task_status as $value => $description)
                 <option value="{{ $value }}" {{ $task->status == $value ? 'selected' : '' }}>{{ $description }}</option>
                 @endforeach
             </select>
        </div>

        <div class="form-group">
            <label for="deadline">Task Deadline</label>
            <input type="date" class="form-control" id="deadline" value="{{ $task->deadline }}" name="deadline">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
   </form>

@endsection
