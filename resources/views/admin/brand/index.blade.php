@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-2">
                        <h1 class="m-0">Brands</h1>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('admin.brand.create') }}" class="nav-link text-success">
                            <i class="nav-icon fa fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Brands</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-5">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a href="{{ route('admin.brand.show', $brand->id) }}" class="link-secondary">
                                            {{ $brand->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.brand.edit', $brand->id) }}" class="nav-link text-primary">
                                            <i class="nav-icon fa fa-solid fa-pen"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.brand.destroy', $brand->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="nav-icon fa fa-solid fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection

