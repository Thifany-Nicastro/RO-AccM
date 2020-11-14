@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Transaction</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('transactions.store') }}" enctype="multipart/form-data">
                        @csrf

                        @include('transactions.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection