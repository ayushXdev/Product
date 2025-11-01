@extends('layouts.app')
@section('main')

<table border="2px"
style="margin: 20px auto; border-collapse: collapse; text-align: center; width: 80%; height: 80px; ' "
>

<form action="{{route('dashboard')}}" method="GET" style="text-align: center; margin-top: 20px;">
    <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}"
        style="padding:5px; width:200px; border:1px solid #ccc; border-radius:4px; margin-top:10px;">
    <button type="submit">Submit</button>
</form>

    <thead>
      <tr>
        <th>id</th>
        <th>Product Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
   <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->product_name}}</td>
      <td>{{$product->description}}</td>
    </tr>
  @endforeach
   </tbody>
    </tbody>
  </table>

  <div style="text-align:center; margin:20px;">
    {{$products->links()}}
  </div>
@endsection