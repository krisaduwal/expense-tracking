@extends('layout.app')

@section('content')
<h1 align="center">signup page</h1>

<div class="position-absolute top-50 start-50 translate-middle">

<div class="card border-success mb-3" style="max-width: 28rem;">
<div class="card-body text-success">

<form method="post" action="{{route('signupUser')}}">
    @csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
    @error('name')
    <div class="invalid-feedback">
    {{$message}}
    </div>
    @enderror
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
@error('email')
<div class="invalid-feedback">
    {{$message}}
</div>
    @enderror

<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Accept all terms</label>
</div>
<div class="mb-3" align="center";>
<button type="submit" class="btn btn-primary">Sign up</button>
</div>
</form>
</div>
</div>
</div>
@endsection

