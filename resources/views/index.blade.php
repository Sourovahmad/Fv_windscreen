@extends('includes.app')

@section('content')

<div class="text-center">
    <h1>Site on Under Construction</h1>
</div>



<form action="{{ route('orders.store') }}" method="post">

    @csrf


    <input type="file" name="image" id="" >

    <button type="submit">submit</button>


</form>





@endsection