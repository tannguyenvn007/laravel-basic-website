@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur libero cumque odit ullam nihil labore soluta. Beatae nemo, aperiam earum, perferendis ullam quia deleniti corporis harum voluptatem velit quae!</p>
@endsection
@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection

