@extends('layouts.app')

@section('title', 'Users')

@section('sidebar')

@endsection

@section('content')
<div>
  <a href="/test">Test</a>
</div>
<div>
  {{ $test->email}} :
  {{ $test->password}}
</div>
@endsection