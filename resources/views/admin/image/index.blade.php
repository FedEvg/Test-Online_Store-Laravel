@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-2">
                        <h1 class="m-0">Images</h1>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('admin.image.create') }}" class="nav-link text-success">
                            <i class="nav-icon fa fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Images</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    @foreach($images as $image)
                        <div class="col-2 ">
                            <div class="card" style="width: 16rem;">
                                <img src="{{ url('storage/images/' . $image->path) }}" alt="{{ $image->path }}" style="height: 10rem;" class="img-thumbnail">
                                <hr>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="{{ route('admin.image.show', $image->id) }}" class="nav-link text-warning">
                                            <i class="nav-icon fa fa-solid fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="{{ route('admin.image.edit', $image->id) }}" class="nav-link text-primary">
                                            <i class="nav-icon fa fa-solid fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <form action="{{ route('admin.image.destroy', $image->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="nav-icon fa fa-solid fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

    </div>
@endsection

