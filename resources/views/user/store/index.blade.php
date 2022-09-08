@extends('layouts.user.app')

@section('title') Store @endsection

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
                <!-- Product Filter -->
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
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-3.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-3-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$28.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-4.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-4-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">News strappy sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-1.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-1-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$39.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-5.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-5-2.jpg') }}" alt="">
                                    <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">7.7%</span>
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Down puffer coat with collar</a></h3>
                                <div class="product-price">
                                    <span class="old-price">$80.00</span>
                                    <span class="new-price">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-6.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-6-2.jpg') }}" alt="">
                                    <span class="badge-black badge-right-0 badge-top-0 badge-width-height-1">sold uot</span>
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$49.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-7.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-7-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-8.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-8-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$75.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-9.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-9-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Strappy sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-16.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-16-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Fashion sneaker winter</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$28.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-15.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-15-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">News strappy sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-14.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-14-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Check bermuda shorts</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$39.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-13.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-13-2.jpg') }}" alt="">
                                    <span class="badge-black badge-left-20 badge-top-20 badge-width-height-2 badge-border-radius-100">7.7%</span>
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Down puffer coat with collar</a></h3>
                                <div class="product-price">
                                    <span class="old-price">$80.00</span>
                                    <span class="new-price">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-12.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-12-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Bejewelled velvet sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$49.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-11.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-11-2.jpg') }}" alt="">
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">Contrast faux fur jacket</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="{{ asset('assets/images/product/product-13.jpg') }}" alt="">
                                    <img class="hover-img" src="{{ asset('assets/images/product/product-13-2.jpg') }}" alt="">
                                    <span class="badge-white badge-text-black badge-left-20 badge-top-20 badge-width-height-1">12 Sold/31</span>
                                </a>
                                <div class="product-action product-action-position-1">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-2 title-font-width-400 text-center">
                                <h3><a href="product-details.html">News strappy sandals</a></h3>
                                <div class="product-price">
                                    <span class="new-price">$26.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="shop-2" class="tab-pane">
                <div class="shop-list-wrap mb-70">
                    <div class="row">
                        <div class="custom-col-32-shop">
                            <div class="product-wrap">
                                <div class="product-img default-overlay">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/images/product/product-8.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/images/product/product-8-2.jpg') }}" alt="">
                                    </a>
                                    <div class="shop-list-quickview">
                                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-68-shop">
                            <div class="shop-list-content ml-20">
                                <h3><a href="#">Checked Knit Jumpsuit</a></h3>
                                <div class="pro-list-price">
                                    <span>$50.00</span>
                                </div>
                                <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                <div class="product-list-action">
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    <div class="pro-list-actioncart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-list-wrap mb-70">
                    <div class="row">
                        <div class="custom-col-32-shop">
                            <div class="product-wrap">
                                <div class="product-img default-overlay">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/images/product/product-1.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/images/product/product-1-2.jpg') }}" alt="">
                                    </a>
                                    <div class="shop-list-quickview">
                                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-68-shop">
                            <div class="shop-list-content ml-20">
                                <h3><a href="#">Contrast Faux Fur Jacket</a></h3>
                                <div class="pro-list-price">
                                    <span>$80.00</span>
                                </div>
                                <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                <div class="product-list-action">
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    <div class="pro-list-actioncart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-list-wrap mb-70">
                    <div class="row">
                        <div class="custom-col-32-shop">
                            <div class="product-wrap">
                                <div class="product-img default-overlay">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/images/product/product-2.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/images/product/product-2-2.jpg') }}" alt="">
                                    </a>
                                    <div class="shop-list-quickview">
                                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-68-shop">
                            <div class="shop-list-content ml-20">
                                <h3><a href="#">Sleeve Button Cowl Neck</a></h3>
                                <div class="pro-list-price">
                                    <span>$50.00</span>
                                </div>
                                <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                <div class="product-list-action">
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    <div class="pro-list-actioncart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-list-wrap mb-70">
                    <div class="row">
                        <div class="custom-col-32-shop">
                            <div class="product-wrap">
                                <div class="product-img default-overlay">
                                    <a href="product-details.html">
                                        <img class="default-img" src="{{ asset('assets/images/product/product-3.jpg') }}" alt="">
                                        <img class="hover-img" src="{{ asset('assets/images/product/product-3-2.jpg') }}" alt="">
                                    </a>
                                    <div class="shop-list-quickview">
                                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col-68-shop">
                            <div class="shop-list-content ml-20">
                                <h3><a href="#">Cable – knit sweater</a></h3>
                                <div class="pro-list-price">
                                    <span>$70.00</span>
                                </div>
                                <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                <div class="product-list-action">
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    <div class="pro-list-actioncart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <a title="Add to Compare" href="#"><i class="fa fa-files-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pro-pagination-style text-center">
                <ul>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="dlicon arrows-1_tail-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
