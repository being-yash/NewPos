@extends('layouts.admin')

@section('title', 'Create Store')
@section('content-header', 'Create Store')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('stores.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Store Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Name" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="details">Details</Details></label>
                <textarea name="remark" class="form-control @error('details') is-invalid @enderror"
                    id="details" placeholder="Details">{{ old('details') }}</textarea>
                @error('details')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <button class="btn btn-primary" type="submit">Create</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection