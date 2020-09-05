@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
    @for ($i = 0; $i < 10; $i++)
        <div class="col my-3">
            <div class="card text-center">
                <div class="card-front">
                    <img src="https://browiki.org/images/3/3f/Arcebispospartyicn.png"
                        class="card-img-top-build px-3 pt-3" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the
                        bulk of the card's content.
                    </p>
                </div>
                <div class="card-footer text-muted">
                    <a class="btn btn-primary btn-sm btn-tag" href="#" role="button">Arcebispo</a>
                    <a class="btn btn-primary btn-sm btn-tag" href="#" role="button">MvP</a>
                    <a class="btn btn-primary btn-sm btn-tag" href="#" role="button">PvM</a>
                    <a href="#" class="heart float-right align-middle"><i class="fas fa-star align-middle"></i></a>
                </div>
            </div>
        </div>
    @endfor
</div>
@endsection

@section('scripts')
@endsection