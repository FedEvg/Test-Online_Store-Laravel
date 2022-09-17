@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit {{ $clothing->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit {{ $clothing->name }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">

                        <form action="{{ route('admin.clothing.update', $clothing->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id === $clothing->category->id ? ' selected' : '' }}
                                        >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-danger">
                                @error('category_id')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Brand</label>
                                <select class="form-control" name="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $brand->id === $clothing->brand->id ? ' selected' : '' }}
                                        >{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-danger">
                                @error('brand_id')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $clothing->name }}">
                            </div>
                            <p class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Color</label>
                                <select class="select2bs4" name="color_ids[]" multiple="multiple"
                                        data-placeholder="Select color" style="width: 100%;">
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}"
                                            {{ is_array($clothing->colors->pluck('id')->toArray()) && in_array($color->id, $clothing->colors->pluck('id')->toArray()) ? ' selected' : '' }}
                                        >{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-danger">
                                @error('color_id')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Size</label>
                                <select class="select2bs4" name="size_ids[]" multiple="multiple"
                                        data-placeholder="Select size" style="width: 100%;">
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}"
                                            {{ is_array($clothing->sizes->pluck('id')->toArray()) && in_array($size->id, $clothing->sizes->pluck('id')->toArray()) ? ' selected' : '' }}
                                        >{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-danger">
                                @error('size_id')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="quantity"
                                       value="{{ $clothing->quantity }}">
                            </div>
                            <p class="text-danger">
                                @error('quantity')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Availability status</label>
                                <select class="form-control" name="status_id">
                                    @foreach($statuses as $id => $role)
                                        <option value="{{ $id }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                                <p class="text-danger">
                                    @error('status_id')
                                    {{ $message }}
                                    @enderror
                                </p>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $clothing->price }}">
                            </div>
                            <p class="text-danger">
                                @error('price')
                                {{ $message }}
                                @enderror
                            </p>

                            <div class="form-group">
                                <label>Discount</label>
                                <input type="text" class="form-control" name="discount"
                                       value="{{ $clothing->discount }}">
                            </div>
                            <p class="text-danger">
                                @error('discount')
                                {{ $message }}
                                @enderror
                            </p>

                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
