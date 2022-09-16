@extends('layouts.client.app')

@section('title')
    Like list
@endsection

@section('content')
    <div class="wishlist-main-area pt-20 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-content table-responsive wishlist-table-content">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Stock Status</th>
                                            <th> Price</th>
                                            <th class="wishlist-cart-none"><span>Add to cart</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="wishlist-remove">
                                                <a href="#"><i class="dlicon ui-1_simple-remove"></i></a>
                                            </td>
                                            <td class="wishlist-img">
                                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                            </td>
                                            <td class="wishlist-name">
                                                <a href="#">Embroidered logo shirt</a>
                                            </td>
                                            <td class="wishlist-stock">
                                                <span>In Stock</span>
                                            </td>
                                            <td class="wishlist-price"><span class="amount">$26.00</span></td>
                                            <td class="wishlist-cart">
                                                <a href="#">Add to cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wishlist-remove">
                                                <a href="#"><i class="dlicon ui-1_simple-remove"></i></a>
                                            </td>
                                            <td class="wishlist-img">
                                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                            </td>
                                            <td class="wishlist-name">
                                                <a href="#">Floral lace dress</a>
                                            </td>
                                            <td class="wishlist-stock">
                                                <span>In Stock</span>
                                            </td>
                                            <td class="wishlist-price"><span class="amount">$26.00</span></td>
                                            <td class="wishlist-cart">
                                                <a href="#">Add to cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="wishlist-remove">
                                                <a href="#"><i class="dlicon ui-1_simple-remove"></i></a>
                                            </td>
                                            <td class="wishlist-img">
                                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                            </td>
                                            <td class="wishlist-name">
                                                <a href="#">Embroidered logo shirt</a>
                                            </td>
                                            <td class="wishlist-stock">
                                                <span>In Stock</span>
                                            </td>
                                            <td class="wishlist-price"><span class="amount">$26.00</span></td>
                                            <td class="wishlist-cart">
                                                <a href="#">Add to cart</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
