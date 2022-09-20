@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-2">
                        <h1 class="m-0">Clothes</h1>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('admin.clothing.create') }}" class="nav-link text-success">
                            <i class="nav-icon fa fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Clothes</li>
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
                                <th scope="col">Title</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clothes as $clothing)
                                <tr>
                                    <th scope="row">{{ ($clothes->currentpage()-1) * $clothes->perpage() + $loop->index + 1 }}</th>
                                    <td>
                                        <a href="{{ route('admin.clothing.show', $clothing->id) }}" class="link-secondary">
                                            {{ $clothing->fullTitle() }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.clothing.edit', $clothing->id) }}" class="nav-link text-primary">
                                            <i class="nav-icon fa fa-solid fa-pen"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.clothing.destroy', $clothing->id) }}" method="POST">
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
                        <div class="paginate">
                            {{ $clothes->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
