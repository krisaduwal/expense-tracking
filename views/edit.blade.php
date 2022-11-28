@extends('layout.app')
    
@section('content')
<div class="container">
<h1>hey!</h1>
</div>

<div class="position-absolute top-50 start-50 translate-middle">

<div class="card border-success mb-3" style="max-width: 28rem;">
<div class="card-body text-success">
    <form action="{{route('updateExpense')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$item->id}}" name="id">
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
        <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>

    </form>

</div>
</div>
</div>
@endsection
