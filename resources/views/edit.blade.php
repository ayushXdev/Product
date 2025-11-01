@extends('layouts.app')
@section('main')

<form action="{{route('update', $data->id)}}" method="POST" style="display: flex; flex-direction: column; width: 300px; margin: 30px auto; padding: 20px; border: 1px solid #ccc;  border-radius: 2px;" >
    @csrf
    @method('PUT')

    <label for="">Product Name</label>
    <input type="text" name="product_name" value="{{old('product_name', $data->product_name)}}"><br>
    <label for="">Product Description</label>
    <input type="text" name="description" value="{{old('description', $data->description)}}">

    <button type="submit" style="margin-top: 10px; background-color: blue; color: white; padding: 8px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
</form>
@endsection