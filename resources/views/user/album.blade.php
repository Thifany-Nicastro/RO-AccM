@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
    @for ($i = 0; $i < 10; $i++)
        <div class="col my-3 d-flex justify-content-center">
            <div class="card card-flip text-center">
                <div class="card-front">
                    <img src="img/tulips.jpg" class="card-img-top px-3 pt-3" alt="...">
                    <div class="card-body">
                        <h3 class="card-title pt-3">Título</h3>
                    </div>
                </div>
                <div class="card-back justify-content-center d-flex align-items-center">
                    <div class="card-body">
                        <h3 class="card-title">Título</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <p class="card-text"><small class="text-muted">17/10/2019</small></p>
                        <a href="#" class="heart"><i class="fas fa-heart fa-4x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
</div>
@endsection

@section('scripts')
@endsection