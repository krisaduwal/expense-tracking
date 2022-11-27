@extends('layout.app')
    
@section('content')
<div class="container">
<h1>Spend wisely!</h1>
</div>

<div class="container">



<div class="card border-success mb-3" style="max-width: 28rem;">
<div class="card-body text-success">
    <form action="{{route('saveExpense')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category" id="category" name="category">
            <option value="food">Food</option>
            <option value="entertainment">Entertainment</option>
            <option value="clothes">Clothes</option>
            <option value="health">Health</option>
            <option value="others">Others</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" name="date" class="form-control" id="date">
        </div>

        <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="text" name="amount" class="form-control" id="amount">
        </div>

        <div class="mb-3" align="center";>
        <button type="submit" class="btn btn-primary">SAVE</button>
        </div>

    </form>

</div>
</div>

<br>

<div>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  @foreach($list as $value)

    <tr>
        <td scope="row">{{$value->title}}</td>
        <td scope="row">{{$value->category}}</td>
        <td scope="row">{{$value->date}}</td>
        <td scope="row">{{$value->amount}}</td>

        <td scope="row"> 
                <a href="{{url('/delete/' .$value->id)}}">
                <button type="button" class="btn btn-outline-danger">DELETE</button>
                </a>
            </td>
            <td scope="row">
                <a href="{{url('/edit/' .$value->id)}}">
                <button type="button" class="btn btn-outline-info">EDIT</button>
                </a>
            </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
<br>
<div>
<form action="{{route('logout')}}" method="get">
    @csrf
  <button type="submit" class="btn btn-danger">Log Out</button>
</form>
</div>

</div>
@endsection
