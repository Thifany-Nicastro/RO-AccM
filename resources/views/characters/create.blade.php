@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Character</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('characters.store') }}" enctype="multipart/form-data">
                        @csrf

                        @include('characters.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection