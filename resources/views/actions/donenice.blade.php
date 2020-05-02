@extends('layouts.master')
@section('content')
<div class="centered">
    <a href="{{route('home')}}">back</a>
<h1> Ankesh {{$action}}  {{$name}}!</h1>
</div>
@endsection
