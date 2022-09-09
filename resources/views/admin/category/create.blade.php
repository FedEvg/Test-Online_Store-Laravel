@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-5">

                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name category</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <p class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </p>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection

