@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit {{ $user->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit {{ $user->name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                <p class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" class="form-control" name="surname" value="{{ $user->surname }}">
                                <p class="text-danger">
                                    @error('surname')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Patronymic</label>
                                <input type="text" class="form-control" name="patronymic" value="{{ $user->patronymic }}">
                                <p class="text-danger">
                                    @error('patronymic')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                <p class="text-danger">
                                    @error('phone')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                <p class="text-danger">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role_id">
                                    @foreach($roles as $id => $role)
                                        <option
                                            {{ $id == $user->role_id ? ' selected' : '' }}
                                            value="{{ $id }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                                <p class="text-danger">
                                    @error('role_id')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
