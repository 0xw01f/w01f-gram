@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf


            <div class="col-12 offset-2">

                <h1>Add New Post</h1>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Caption</label>
    
                    <input id="caption"
                    type="text"
                    class="form-control @error('caption') is-invalid @enderror"
                    name="caption"
                    value="{{ old('caption') }}" 
                    autocomplete="caption" autofocus>
    
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary mr-3">Add Post</button>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
                </div>


            </div>
        </form>
    </div>
</div>
@endsection
