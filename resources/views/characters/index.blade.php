@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-3 text-right">
            <a type="button" href="{{ route('characters.create') }}" class="btn btn-success">New character <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
        @foreach ($characters as $character)
        <div class="col my-3">
            <div class="card">
                <div class="card-header">
                    {{ $character->name }}
                </div>

                <div class="card-body">
                    {{ $character->job }}
                    {{ $character->picture }}
                    <img src="{{ $character->picture ? asset("storage/uploads/$character->picture") : asset('img/default.jpg')}}" class="img-thumbnail img-thumbnail-character">
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

@section('scripts')
<script>
    $(function () {
        $('form').submit(function(e) {
            e.preventDefault();
            var currentForm = this;
            bootbox.confirm({ 
                title: "Delete character",
                message: "Are you really sure?",
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> No',
                        className: 'btn-danger'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Yes',
                        className: 'btn-success'
                    }
                },
                // size: "small",
                callback: function(result) { 
                    if (result) {
                        currentForm.submit();
                    }
                }
            })
        });
    });
</script>
@endsection