@extends('layouts.simple')

@section('content')
@foreach($users as $user)

<tr>
	<td>{{ $user->id }}</td>
	<td>{{ $user->username }}</td>
	<td>{{ $user->created_at }}</td>
	<td>{{ $user->score }}</td>
	
</tr>

@endforeach
@stop

