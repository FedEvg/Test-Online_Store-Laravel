@extends('layouts.client.app')

@section('title')
    My account
@endsection

@section('content')
    <div class="my-account-area pt-20 pb-95">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">

                    <div class="myaccount-tab-menu nav" role="tablist">
                        <a href="#dashboad" class="active" data-toggle="tab">
                            Dashboard</a>
                        <a href="#orders" data-toggle="tab"> Orders</a>
                        <a href="#download" data-toggle="tab"> Download</a>
                        <a href="#address-edit" data-toggle="tab"> address</a>
                        <a href="#account-info" data-toggle="tab"> Account Details</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input data-toggle="tab" class="btn" type="submit" value="Log out"></input>
                            </form>
                    </div>


                    <div class="tab-content" id="myaccountContent">
                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                            <div class="myaccount-content">
                                <div class="welcome">
                                    <p>Hello, <strong>{{ auth()->user()->fullName() }}</strong>!</p>
                                </div>
                                <p class="mb-0">From your account dashboard. you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="orders" role="tabpanel">
                            <div class="myaccount-content">
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Pending</td>
                                            <td>$3000</td>
                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>July 22, 2018</td>
                                            <td>Approved</td>
                                            <td>$200</td>
                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>June 12, 2017</td>
                                            <td>On Hold</td>
                                            <td>$990</td>
                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="download" role="tabpanel">
                            <div class="myaccount-content">
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Date</th>
                                            <th>Expire</th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Haven - Free Real Estate PSD Template</td>
                                            <td>Aug 22, 2018</td>
                                            <td>Yes</td>
                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td>HasTech - Profolio Business Template</td>
                                            <td>Sep 12, 2018</td>
                                            <td>Never</td>
                                            <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="address-edit" role="tabpanel">
                            <div class="myaccount-content">
                                <address>
                                    <p><strong>Alex Tuntuni</strong></p>
                                    <p>1355 Market St, Suite 900 <br>
                                        San Francisco, CA 94103</p>
                                    <p>Mobile: (123) 456-7890</p>
                                </address>
                                <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Edit Address</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                            <div class="myaccount-content">
                                <div class="account-details-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <label for="first-name" class="required">First Name <span>*</span></label>
                                                    <input type="text" id="first-name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-input-item">
                                                    <label for="last-name" class="required">Last Name <span>*</span></label>
                                                    <input type="text" id="last-name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-input-item">
                                            <label for="display-name" class="required">Display Name <span>*</span></label>
                                            <input type="text" id="display-name" />
                                        </div>
                                        <div class="single-input-item">
                                            <label for="email" class="required">Email Addres <span>*</span></label>
                                            <input type="email" id="email" />
                                        </div>
                                        <fieldset>
                                            <legend>Password change</legend>
                                            <div class="single-input-item">
                                                <label for="current-pwd" class="required">Current password (leave blank to leave unchanged)</label>
                                                <input type="password" id="current-pwd" />
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="single-input-item">
                                                        <label for="new-pwd" class="required">New password (leave blank to leave unchanged)</label>
                                                        <input type="password" id="new-pwd" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-input-item">
                                                        <label for="confirm-pwd" class="required">Confirm new password</label>
                                                        <input type="password" id="confirm-pwd" />
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="single-input-item">
                                            <button class="check-btn sqr-btn ">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
