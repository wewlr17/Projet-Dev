@extends('layouts.app')

@section('content')

<div class="container">


<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Categories</th>
      <th scope ="col">Action(s)</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <td scope="row">{{$product->title}}</td>
      <td scope="row">{{$product->description}}</td>
      <td><img class="imgCategory" src="{{$product->image}}"></img></td>
      <td scope="row">
      
      @foreach ($product->categories as $category)
        {{$category->title}}
      @endforeach
      </td>
      <td>

        <form action="{{route('product.delete', $product->id)}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary">Supprimer </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
@endsection