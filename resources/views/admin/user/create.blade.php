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
                        <h1 class="m-0">Add user</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add user</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-3">

                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('') }}">
                                <p class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                                <p class="text-danger">
                                    @error('surname')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Patronymic</label>
                                <input type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}">
                                <p class="text-danger">
                                    @error('patronymic')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                <p class="text-danger">
                                    @error('phone')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
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
                                            {{ $id == old('role_id') ? ' selected' : '' }}
                                            value="{{ $id }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                                <p class="text-danger">
                                    @error('role_id')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection

