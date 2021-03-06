@extends('layouts.app')
@section('content')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('compte', Auth::user()->id) }}">{{Auth::user()->name}}</a>
                        <a href="{{ route('logout') }}">Disconnect</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ClothingShop
                </div>

                <div class="links">
                    <a href="{{route('category.list')}}">Categories</a>
                    <a href="{{route('product.list')}}">Produits</a>
                </div>
            </div>
        </div>
@endsection
