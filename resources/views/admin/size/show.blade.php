@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <h1 class="m-0">Size {{ $size->name }}</h1>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.size.edit', $size->id) }}" class="nav-link text-primary">
                                    <i class="nav-icon fa fa-solid fa-pen"></i>
                                </a>
                            </div>
                            <div class="col">
                                <form action="{{ route('admin.size.destroy', $size->id) }}" method="POST">
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
                            <li class="breadcrumb-item active">Size {{ $size->name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-5">
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $size->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $size->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Created</th>
                                <td>{{ $size->created_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Updated</th>
                                <td>{{ $size->updated_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Deleted</th>
                                <td>{{ $size->deleted_at }}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection

