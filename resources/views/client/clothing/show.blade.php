@extends('layouts.client.app')

@section('title')
    Clothes
@endsection

@section('content')
    <div class="product-details-area section-padding-1 pb-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-details-tab">
                        <div class="product-dec-right pro-dec-big-img-slider">

                            @foreach($clothing->images as $image)
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ url('storage/images/' . $image->path) }}">
                                            <img src="{{ url('storage/images/' . $image->path) }}" alt="">
                                        </a>
                                    </div>
                                    <a class="easyzoom-pop-up img-popup"
                                       href="{{ url('storage/images/' . $image->path) }}"><i
                                            class="dlicon ui-1_zoom-in "></i></a>
                                </div>
                            @endforeach

                        </div>
                        <div class="product-dec-slider product-dec-left">
                            @foreach($clothing->images as $image)
                                <div class="product-dec-small active">
                                    <img src="{{ url('storage/images/' . $image->path) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="product-details-col-72">
                            <div class="product-details-content p-dec-content-edit">
                                <div class="pro-dec-next-prev">
                                    <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                    <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                                </div>
                                <h2 class="uppercase">{{ $clothing->fullTitle() }}</h2>
                                <h3>${{ number_format($clothing->price) }}</h3>
                                <div class="product-details-peragraph">
                                    <ul>
                                        <li>Composition: 50% cotton,45% polyester, 5% polyamide.</li>
                                        <li>Filling: 100% polyester.</li>
                                        <li>Hood fur: 64% acrylic,23% modacrylic,13% polyester</li>
                                    </ul>
                                </div>
                                <div class="configurable-wrap">
                                    <div class="configurable-color">
                                        <span>Color</span>
                                        <ul>
                                            @foreach($clothing->colors as $color)
                                                <li><a href="#"><i class="fa fa-solid fa-circle"
                                                                   style="color: {{ $color->name }};"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="configurable-size">
                                        <span>Size</span>
                                        <ul>
                                            @foreach($clothing->sizes as $size)
                                                <li><a href="#"><span class="swatch-anchor">{{ $size->name }}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-details-action-wrap dec-action-border-none">
                                    <div class="product-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </div>
                                    <div class="product-details-cart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <div class="product-details-wishlist">
                                        <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>

                                <div class="product-details-meta">
                                    <span>Categories: <a href="#">{{ $clothing->category->name }}</a></span>
                                </div>

                            </div>
                        </div>

                        <div class="product-details-col-28">
                            <div class="pro-details-sidebar-active slider-nav-style-3 owl-carousel">
                                <div class="single-pro-details-sidebar">
                                    <a href="#"><img
                                            src="{{ asset('assets/images/product-details/pro-details-sidebar-1.jpg') }}"
                                            alt=""></a>
                                    <div class="pro-details-sidebar-content">
                                        <h4><a href="#">NEW <br>LONDON</a></h4>
                                        <p>Off 20% for all</p>
                                    </div>
                                </div>
                                <div class="single-pro-details-sidebar">
                                    <a href="#"><img
                                            src="{{ asset('assets/images/product-details/pro-details-sidebar-2.jpg') }}"
                                            alt=""></a>
                                    <div class="pro-details-sidebar-content">
                                        <h4><a href="#">NEW <br>LONDON</a></h4>
                                        <p>Off 20% for all</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            class="dlicon ui-1_simple-remove" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-slider-active owl-carousel">
                                <a class="img-popup" href="{{ asset("assets/images/product/quickview-1.jpg") }}"><img
                                        src="{{ asset("assets/images/product/quickview-1.jpg") }}"
                                        alt=""><span>sold uot</span></a>
                                <a class="img-popup" href="{{ asset("assets/images/product/quickview-2.jpg") }}"><img
                                        src="{{ asset("assets/images/product/quickview-2.jpg") }}"
                                        alt=""><span>sold uot</span></a>
                            </div>
                            <!-- Thumbnail Large Image End -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-details-content">
                                <div class="pro-dec-next-prev">
                                    <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                    <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                                </div>
                                <h2 class="uppercase">{{ $clothing->fullTitle() }}</h2>
                                <h3>${{ number_format($clothing->price) }}</h3>
                                <div class="product-details-peragraph">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci assumenda
                                        distinctio earum eum excepturi iure maxime modi quam quos? Ab alias
                                        exercitationem expedita! Error exercitationem maxime suscipit tempora
                                        voluptates.</p>
                                </div>
                                <div class="product-details-action-wrap">
                                    <div class="product-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </div>
                                    <div class="product-details-cart">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                    <div class="product-details-wishlist">
                                        <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="product-details-compare">
                                        <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                    </div>
                                </div>
                                <div class="product-details-info">
                                    <a href="#"><i class="dlicon location_pin"></i>Store availability</a>
                                    <a href="#"><i class="dlicon envir_car"></i>Delivery and return</a>
                                    <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                                </div>
                                <div class="product-details-meta">
                                    <span>SKU: REF. LA-140</span>
                                    <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 01</a>, <a href="#">Main 02</a></span>
                                    <span>Tags: <a href="#">Blazer</a>, <a href="#">chair</a>, <a href="#">Coat</a>, <a
                                            href="#">dress</a>, <a href="#">light</a>, <a href="#">Living</a>, <a
                                            href="#">Main 01</a></span>
                                </div>
                                <div class="social-icon-style-3">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
@endsection
