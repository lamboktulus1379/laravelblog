@extends('layouts.app')

@section('title', 'Users')

@section('sidebar')

@endsection

@section('content')
<p>This is my user</p>
<div>
  <a href="/test/create">Add User</a>
</div>
@foreach($tests as $test)
<div>
  {{ $test->email}} :
  {{ $test->password}}<a href="/test/{{$test->id}}">Show</a> <a href="/test/{{$test->id}}/edit">Edit</a>
  <form action="/test/{{$test->id}}" method="POST">@csrf @method('DELETE')<button type="submit" type="btn btn-warning">Delete</button></form>
</div>
@endforeach
@endsection