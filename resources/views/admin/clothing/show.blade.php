@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <h1 class="m-0">{{ $clothing->category->name }} {{ $clothing->brand->name }} {{ $clothing->name }} </h1>
                    </div>
                    <div class="col-sm-2">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.clothing.edit', $clothing->id) }}"
                                   class="nav-link text-primary">
                                    <i class="nav-icon fa fa-solid fa-pen"></i>
                                </a>
                            </div>
                            <div class="col">
                                <form action="{{ route('admin.clothing.destroy', $clothing->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="nav-icon fa fa-solid fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Clothing {{ $clothing->name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-3">
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $clothing->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $clothing->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Category</th>
                                <td>{{ $clothing->category->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Brand</th>
                                <td>{{ $clothing->brand->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Colors</th>
                                @foreach($clothing->colors as $color)
                                    <td><i class="nav-icon fa fa-solid fa-circle" style="color: {{ $color->name }};"></i></td>
                                @endforeach
                            </tr>
                            <tr>
                                <th scope="row">Sizes</th>
                                @foreach($clothing->sizes as $size)
                                    <td>{{ $size->name }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th scope="row">Quantity</th>
                                <td>{{ $clothing->quantity }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Availability</th>
                                <td>{{ $clothing->availability_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>{{ $clothing->price }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Updated</th>
                                <td>{{ $clothing->updated_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Created</th>
                                <td>{{ $clothing->created_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Deleted</th>
                                <td>{{ $clothing->deleted_at }}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection

