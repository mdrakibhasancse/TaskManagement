@extends('layouts.app')
@section('title','Dashboard')
@section('content')
     <h1>Hello :: {{ Auth::user()->name }}</h1>
@endsection
