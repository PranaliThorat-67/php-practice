@extends('layouts.masterlayout')

@section('content')
    <h2>Post Page</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam est consectetur excepturi. Deleniti iure officiis unde vero, aliquam praesentium, quaerat officia culpa, accusantium enim ipsam rerum saepe ipsa consequuntur repellendus!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
    
@endsection

@section('title')
    Post
@endsection