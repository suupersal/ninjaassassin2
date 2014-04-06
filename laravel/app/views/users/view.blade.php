@extends('layouts.default')

@section('content')
<h1>User Name: {{$user->username}}</h1>
<h1>Created on: {{$user->created_at}}</h1>

@stop