<div class="form-group row">
    <label for="picture" class="col-md-4 col-form-label text-md-right">Picture</label>

    <div class="col-md-6">
        <input id="picture" type="file" class="form-control @error('picture') is-invalid @enderror" name="picture">

        @error('picture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $character->name ?? old('name') }}">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="job" class="col-md-4 col-form-label text-md-right">Job</label>

    <div class="col-md-6">
        <input id="job" type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{ $character->job ?? old('job') }}">
        
        @error('job')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="race" class="col-md-4 col-form-label text-md-right">Race</label>

    <div class="col-md-6">
        <input id="race" type="text" class="form-control @error('race') is-invalid @enderror" name="race" value="{{ $character->race ?? old('race') }}">
        
        @error('race')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

    <div class="col-md-6">
        <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $character->gender ?? old('gender') }}">

        @error('gender')
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