@extends('layouts.app')

<h3>{{$title}}</h3>
@section('content')
<form action="/test/{{$data->id}}" method="POST" />
@csrf
@method('PUT')
<div class="form-group">
  <input type="text" class="form-control" name="email" placeholder="Email" value="{{$data->email}}" />
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection