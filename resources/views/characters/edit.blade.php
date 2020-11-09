@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Character</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('characters.update', $character) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        @include('characters.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection