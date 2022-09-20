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
                                            <th>Price</th>
                                            <th class="wishlist-cart-none"><span>Add to cart</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clothes as $clothing)
                                        <tr>
                                            <td class="wishlist-remove">
                                                <form action="{{ route('client.likes.destroy', $clothing->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="dlicon ui-1_simple-remove"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="wishlist-img">
                                                <img src="{{ url('storage/' . $clothing->preview_image) }}" alt="" style="width: 100px;"></a>
                                            </td>
                                            <td class="wishlist-name">
                                                <a href="{{ route('client.clothing.show',$clothing->id) }}">{{ $clothing->fullTitle() }}</a>
                                            </td>
                                            <td class="wishlist-stock">
                                                <span>{{ $clothing->status_id }}</span>
                                            </td>
                                            <td class="wishlist-price"><span class="amount">${{ number_format($clothing->price) }}</span></td>
                                            <td class="wishlist-cart">
                                                <a href="#">Add to cart</a>
                                            </td>
                                        </tr>
                                        @endforeach
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
