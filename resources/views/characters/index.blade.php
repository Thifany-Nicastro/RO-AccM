@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-3">
        <div class="col-12 my-3 text-right">
            <a type="button" href="{{ route('characters.create') }}" class="btn btn-success">New character <i class="fas fa-plus"></i></a>
        </div>
        @foreach ($characters as $character)
        <div class="col my-3">
            <div class="card">
                <div class="card-header">
                    {{ $character->name }}
                </div>

                <div class="card-body">
                    {{ $character->job }}
                    {{ $character->picture }}
                    <img src="{{ $character->picture ? asset("storage/uploads/$character->picture") : asset('img/default.jpg')}}">
                </div>

                <div class="card-footer">
                    <a type="button" href="{{ route('characters.edit', $character) }}" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
                    <form action="{{ route('characters.destroy', $character) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection