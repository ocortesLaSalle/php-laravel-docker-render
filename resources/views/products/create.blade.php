@extends('products.layout')

@section('title', 'Create Product')

@section('main')
  <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
      <label for="name">Product Name:</label>
      <input type="text" name="name" id="name">
      @error('name')
        <div>{{ $message }}</div>
      @enderror
    </div>
    <div>
      <label for="price">Product Price:</label>
      <input type="text" name="price" id="price">
      @error('price')
        <div>{{ $message }}</div>
      @enderror
    </div>
    <button type="submit">Create</button>
  </form>
@endsection