@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit image</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit image</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-3">

                        <form action="{{ route('admin.image.update', $image->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Clothing</label>
                                <select class="form-control" name="clothing_id">
                                    @foreach($clothes as $clothing)
                                        <option
                                            {{ $clothing->id === old($clothing->id) ? ' selected' : '' }}
                                            value="{{ $clothing->id }}">{{ $clothing->fullTitle() }}</option>
                                    @endforeach
                                </select>
                                <p class="text-danger">
                                    @error('clothing_id')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <img src="{{ url('storage/images/' . $image->path) }}" alt="{{ $image->path }}" class="img-thumbnail w-50">
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="path">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm mt-1">Add image</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
