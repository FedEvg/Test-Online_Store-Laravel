@extends('admin.layouts.app')
@section('tilte')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Main</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $countCategory }}</h3>
                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-layer-group"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $countColor }}</h3>
                                <p>Colors</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-solid fa-palette"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $countBrand }}</h3>
                                <p>Brands</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-solid fa-tag"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $countSize }}</h3>
                                <p>Sizes</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-solid fa-fon"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{ $countClothing }}</h3>
                                <p>Clothes</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-solid fa-vest-patches"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3>{{ $countImage }}</h3>
                                <p>Images</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon far fa-image"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>{{ $countUser }}</h3>
                                <p>Users</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fa fa-solid fa-users"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection

