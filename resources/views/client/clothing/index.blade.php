@extends('layouts.client.app')

@section('title')
    Clothes
@endsection

@section('content')
    <div class="shop-area section-padding-1 pt-20 pb-100">
        <div class="container-fluid">
            <div class="shop-top-bar">
                <div class="shop-top-bar-left">
                    <div class="shop-top-show">
                        <span>Showing 1–12 of 39 results</span>
                    </div>
                    <div class="shop-page-list">
                        <ul>
                            <li>Show</li>
                            <li class="active"><a href="#">12</a></li>
                            <li><a href="#">15</a></li>
                            <li><a href="#">30</a></li>
                        </ul>
                    </div>
                </div>
                <div class="shop-top-bar-right">
                    <div class="shop-tab nav">
                        <a href="#shop-1" class="active" data-toggle="tab"><i class="dlicon ui-2_grid-45"></i></a>
                        <a href="#shop-2" data-toggle="tab"><i class="dlicon design_bullet-list-69"></i></a>
                    </div>
                    <div class="shop-filter ml-50">
                        <a class="shop-filter-active" href="#">Filters <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></a>
                    </div>
                    <div class="shop-short-by ml-50">
                        <span>Sort by <i class="fa fa-angle-down angle-down"></i> <i class="fa fa-angle-up angle-up"></i></span>
                        <ul>
                            <li class="active"><a href="#">Default sorting</a></li>
                            <li><a href="#">Sort by popularity</a></li>
                            <li><a href="#">Sort by average rating</a></li>
                            <li><a href="#">Sort by latest</a></li>
                            <li><a href="#">Sort by price: low to high</a></li>
                            <li><a href="#">Sort by price: high to low</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-filter-wrapper">
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                        <div class="product-filter">
                            <h5>Price</h5>
                            <div class="price-filter">
                                <ul>
                                    <li><a href="#">$0.00 - $20.00</a></li>
                                    <li><a href="#">$20.00 - $40.00</a></li>
                                    <li><a href="#">$30.00 - $50.00</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Filter -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                        <div class="product-filter">
                            <h5>Size</h5>
                            <div class="product-size">
                                <ul>
                                    <li><a href="#">Full Size</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Filter -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                        <div class="product-filter">
                            <h5>Color</h5>
                            <div class="product-color">
                                <ul>
                                    <li><a href="#">Blue</a></li>
                                    <li><a href="#">Brown</a></li>
                                    <li><a href="#">Green</a></li>
                                    <li><a href="#"> Pink</a></li>
                                    <li><a href="#">Violet</a></li>
                                    <li><a href="#"> White</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Filter -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-20">
                        <div class="product-filter">
                            <h5>Brands</h5>
                            <div class="product-brands">
                                <ul>
                                    <li><a href="#">Airi</a></li>
                                    <li><a href="#">Draven</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#"> Valentino</a></li>
                                    <li><a href="#">Zara </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content jump-3 pt-30">
                <div id="shop-1" class="tab-pane active">
                    <div class="row">
                        @foreach($clothes as $clothing)
                        <div class="custom-col-5">
                            <div class="product-wrap mb-50">
                                <div class="product-img default-overlay mb-25">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ url('storage/' . $clothing->preview_image) }}" alt="">
{{--                                        <img src="{{ url('storage/' . $clothing->preview_image) }}" alt="{{ $clothing->preview_image }}"--}}
{{--                                             style="height: 10rem;" class="img-thumbnail">--}}
{{--                                        <img class="hover-img" src="assets/images/product/product-3-2.jpg" alt="">--}}
                                    </a>
                                    <div class="product-action product-action-position-1">
                                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                                <div class="product-content-2 title-font-width-400 text-center">
                                    <h3><a href="product-details.html">{{ $clothing->fullTitle() }}</a></h3>
                                    <div class="product-price">
                                        <span class="new-price">${{ number_format($clothing->price) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="pro-pagination-style text-center">
                </div>
            </div>
        </div>
    </div>
@endsection
