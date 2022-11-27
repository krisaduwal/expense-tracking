@extends('layout.app')

@section('content')
<h1 align="center">login page</h1>
<div class="position-absolute top-50 start-50 translate-middle">

<div class="card border-success mb-3" style="max-width: 28rem;">
<div class="card-body text-success">
@if(Session::has('fail'))
  <div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
  </div>
@endif

<form method="post" action="{{route('loginUser')}}">
@csrf

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
@error('email')
<div class="invalid-feedback">
{{$message}}
</div>
@enderror

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
@error('password')
<div class="invalid-feedback">
{{$message}}
</div>
@enderror
</div>

<div class="mb-3" align="center">
<button type="submit" class="btn btn-primary">Log In</button>
</div>
</form>
</div>
</div>
</div>
@endsection

