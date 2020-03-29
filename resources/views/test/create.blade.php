@extends('layouts.app')

<h3>{{$title}}</h3>
@section('content')
<form action="/test" method="POST" />
@csrf
<div class="form-group">
  <input type="text" class="form-control" name="email" placeholder="Email" />
</div>
<div class="form-group">
  <input type="password" class="form-control" name="password" placeholder="*******" />
</div>
<div class="form-group">
  <input type="password" class="form-control" name="confirm_password" placeholder="*******" />
</div>
<button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection