<div class="form-group row">
    <label for="value" class="col-md-4 col-form-label text-md-right">Value</label>

    <div class="col-md-6">
        <input id="value" type="text" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ $transaction->value ?? old('value') }}">

        @error('value')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="type" class="col-md-4 col-form-label text-md-right">Job</label>

    <div class="col-md-6">
        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $transaction->type ?? old('type') }}">
        
        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</div>