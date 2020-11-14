@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-3 text-right">
            <a type="button" href="{{ route('transactions.create') }}" class="btn btn-success">New transaction <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
        @foreach ($transactions as $transaction)
        <div class="col my-3">
            <div class="card">
                <div class="card-header">
                    {{ $transaction->uuid }}
                </div>

                <div class="card-body">
                    {{ $transaction->value }}
                    {{ $transaction->type }}
                </div>

                <div class="card-footer">
                    <a type="button" href="{{ route('transactions.edit', $transaction) }}" class="btn btn-sm btn-primary">Edit <i class="fas fa-edit"></i></a>
                    <form action="{{ route('transactions.destroy', $transaction) }}" method="POST" class="float-right">
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

    });
</script>
@endsection