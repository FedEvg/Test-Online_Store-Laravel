@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add clothing</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add clothing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">

                        <form action="{{ route('admin.clothing.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('category_id')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Brand</label>
                                        <select class="form-control" name="brand_id">
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('brand_id')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <p class="text-danger">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Color</label>
                                        <select class="select2bs4" name="color_ids[]" multiple="multiple"
                                                data-placeholder="Select color" style="width: 100%;">
                                            @foreach($colors as $color)
                                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                <li class="select2-selection__choice"
                                                    style="background: {{ $color->name }};"></li>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('color_id')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Size</label>
                                        <select class="select2bs4" name="size_ids[]" multiple="multiple"
                                                data-placeholder="Select size" style="width: 100%;">
                                            @foreach($sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('size_id')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" name="quantity">
                                        <p class="text-danger">
                                            @error('quantity')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Availability</label>
                                        <select class="form-control" name="availability_id">
                                            <option>1</option>
                                        </select>
                                        <p class="text-danger">
                                            @error('availability_id')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price">
                                        <p class="text-danger">
                                            @error('price')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input type="text" class="form-control" name="discount">
                                        <p class="text-danger">
                                            @error('discount')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <lable>Image</lable>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image[]" multiple>
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm mt-1">Add image</button>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection

