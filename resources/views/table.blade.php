@extends('layouts.app')
@section('main')

<table border="2px"
style="margin: 20px auto; border-collapse: collapse; text-align: center; width: 80%; height: 80px; ' "
>
    <thead>
      <tr>
        <th >id</th>
        <th >Product Name</th>
        <th >Description</th>
        <th style="background-color: blue; color: white;" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
   <tbody>
  
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->product_name}}</td>
      <td>{{$product->description}}</td>
      <td><a href="{{route('Edit', $product->id)}}" style="text-decoration: none;">Edit</a></td>
      <td><a href="{{route('Delete', $product->id)}}" style="text-decoration: none;">Delete</a></td>


    </tr>
    @endforeach

   </tbody>
    </tbody>
  </table>
@endsection