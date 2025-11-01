@extends('layouts.app')
@section('main')

<form action="{{route('add')}}" method="POST" style="display: flex; flex-direction: column; width: 300px; margin: 30px auto; padding: 20px; border: 1px solid #ccc;  border-radius: 2px;" >
    @csrf

    <label for="">Product Name</label>
    <input type="text" name='product_name' placeholder="Enter ProductName"><br>
    <label for="">Product Description</label>
    <input type="text" name='description' placeholder=" Enter Description">
    <button type="submit" style="margin-top: 10px; background-color: blue; color: white; padding: 8px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
</form>
@endsection