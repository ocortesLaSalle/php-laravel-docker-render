@extends('products.layout')

@section('title', 'Products')

@section('main')
  @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
  @endif
  <table>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
    </tr>
    @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
      </tr>
    @endforeach
  </table>
@endsection