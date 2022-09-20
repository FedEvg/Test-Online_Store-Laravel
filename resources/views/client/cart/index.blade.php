@extends('layouts.client.app')

@section('title')
    Cart
@endsection

@section('content')
    <div class="cart-main-area pt-20 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Product</th>
                                            <th> Price</th>
                                            <th>Quantity</th>
                                            <th>total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clothes as $clothing)
                                            <tr>
                                                <td class="product-remove">
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-transparent">
                                                            <i class="dlicon ui-1_simple-remove"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td class="product-img">
                                                    <img src="{{ url('storage/' . $clothing->preview_image) }}" alt="" style="width: 80px;"></a>
                                                </td>
                                                <td class="product-name"><a href="{{ route('client.clothing.show',$clothing->id) }}">{{ $clothing->fullTitle() }}</a></td>
                                                <td class="product-price"><span class="amount">${{ number_format($clothing->price) }}</span></td>

                                                <td class="cart-quality">
                                                    <div class="product-details-quality quality-width-cart">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-total"><span>$110.00</span></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-shiping-update-wrapper">
                                    <div class="discount-code">
                                        <input type="text" required="" name="name" placeholder="Coupon code">
                                        <button class="coupon-btn" type="submit">Apply coupon</button>
                                    </div>
                                    <div class="cart-clear">
                                        <a href="#">Clear Cart</a>
                                        <a href="#">Update cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grand-total-wrap">
                                    <h4>Cart totals</h4>
                                    <div class="grand-total-content">
                                        <ul>
                                            <li>Subtotal <span> $87.00</span></li>
                                            <li>Total <span>$87.00</span></li>
                                        </ul>
                                    </div>
                                    <div class="grand-btn">
                                        <a href="#">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
