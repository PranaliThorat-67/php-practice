{{-- @php
    $fruits = ['apple', 'banana', 'grapes'];
@endphp
@include('tasks.header', ['green' => $fruits])

<h1>Home : first Page</h1>


<a href='{{ route("about") }}'>prana</a>
<a href="/post/firstPost">firstpost</a>

{{5 + 2}}

<br></br>

{{ 'Hello World' }}

<br></br>

{{ '<h1>Hello World</h1>' }}
<!-- {!! '<h1>Hello World</h1>' !!} -->

@php
    $names = ["prana", "pranav", "pranay"];
    $user = "pranali thorat"
@endphp

<ul>
    @foreach ($names as $n)
    @if ($loop->first)
        <li style="color: red">{{ $n }}</li>
     
    @else
        <li>{{ $loop -> index }} - {{ $n }}</li>
        
    @endif
    @endforeach
</ul>


@include('tasks.footer') --}}

@extends('layouts.masterlayout')

@section('content')
    {{-- <h2>Home Page</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam est consectetur excepturi. Deleniti iure officiis unde vero, aliquam praesentium, quaerat officia culpa, accusantium enim ipsam rerum saepe ipsa consequuntur repellendus!</p> --}}
    
@endsection

@section('title')
    Home
@endsection

@push('scripts')
    <script src="script.js"></script>    
@endpush