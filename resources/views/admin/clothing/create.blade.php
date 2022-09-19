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
                        <form action="{{ route('admin.clothing.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                            <select class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}
                                                    {{ $category->id == old($category->id) ? 'selected ' : '' }}
                                                    ">{{ $category->name }}</option>
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
                                                <option value="{{ $brand->id }}
                                                    {{ $brand->id == old($brand->id) ? 'selected ' : '' }}
                                                    ">{{ $brand->name }}</option>
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
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
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
                                                <option
                                                    {{ is_array( old('color_ids')) && in_array($color->id, old('color_ids')) ? ' selected' : '' }}
                                                    value="{{ $color->id }}">{{ $color->name }}</option>
                                                <li class="select2-selection__choice"
                                                    style="background: {{ $color->name }};"></li>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('color_ids')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Size</label>
                                        <select class="select2bs4" name="size_ids[]" multiple="multiple"
                                                data-placeholder="Select size" style="width: 100%;">
                                            @foreach($sizes as $size)
                                                <option
                                                    {{ is_array( old('size_ids')) && in_array($size->id, old('size_ids')) ? ' selected' : '' }}
                                                    value="{{ $size->id }}">{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">
                                            @error('size_ids')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" name="quantity"
                                               value="{{ old('quantity') }}">
                                        <p class="text-danger">
                                            @error('quantity')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Availability status</label>
                                        <select class="form-control" name="status_id">
                                            @foreach($statuses as $id => $status)
                                                <option
                                                    {{ $id === old($id) ? ' selected' : '' }}
                                                    value="{{ $id }}">{{ $status }}</option>
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
                                        <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                                        <p class="text-danger">
                                            @error('price')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input type="text" class="form-control" name="discount"
                                               value="{{ old('discount') }}">
                                        <p class="text-danger">
                                            @error('discount')
                                            {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Preview image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_image">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

