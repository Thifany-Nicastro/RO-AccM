@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
    @foreach ($personagens as $personagem)
        <div class="col my-3">
            <div class="card card-flip text-center">
                <div class="card-front">
                    <img src="{{ asset('img/card-placeholder.png') }}" class="card-img-top px-3 pt-3" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $personagem->nome }}</h3>
                    </div>
                </div>
                <div class="card-back justify-content-center d-flex align-items-center">
                    <div class="card-body">
                        <h3 class="card-title">{{ $personagem->raca }}</h3>
                        <p class="card-text">{{ $personagem->classe }}</p>
                        <a href="#" class="heart"><i class="fas fa-heart fa-4x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('scripts')
@endsection