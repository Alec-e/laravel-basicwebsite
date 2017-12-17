<?php 
/* NOTES:
@extends('layouts.app') looks in sibling folder of layouts and finds app. file
*/
?>

@extends('layouts.app')


@section('content')
<h1>homepage!!</h1>
<p>content</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appened to the sidebar</p>

@endsection