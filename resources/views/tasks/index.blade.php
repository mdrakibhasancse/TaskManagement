@extends('layouts.app')
@section('title','Task')
@section('content')

    <a class="btn btn-success" href="{{url('tasks/create')}}">Add New Task</a>
    <hr>
    <table class="table table-bordered table-striped">
           <tr>
               <td>Task Name</td>
               <td>Category</td>
               <td>Details</td>
               <td>Deadline</td>
               <td>Status</td>
               <td>Action</td>
           </tr>

        @foreach ($tasks as $task)
          <tr>
            <td>{{ $task->name }}</td>
            <td>{{ $task->category->name }}</td>
            <td>{{ $task->details }}</td>
            <td>{{ $task->deadline }}</td>
            <td>{{  App\Enums\TaskStatus::getDescription($task->status) }}</td>
            <td>
                <div class="btn-style">
                    <div class="edit-btn">
                        <a href="{{url("tasks/$task->id/edit")}}" class="btn btn-warning">Edit</a>
                    </div>

                    <div class="delete-btn">
                       <form action="{{url("tasks/$task->id")}}" method="post">
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
