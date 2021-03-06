@extends('layouts.app')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">Retour</a>
  <div class="top-right links">
    <a href="{{route('category.add')}}">Ajouter</a>
  </div>
</nav>

@section('content')

<div class="container">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Image</th>
        <th scope="col">Action(s)</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td scope="row">{{$category->title}}</td>
        <td><img class="imgCategory" src="{{$category->image}}"></img></td>
        
        <td scope="row">

          <form action="{{route('category.delete', $category->id)}}" method="POST">
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