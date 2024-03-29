@extends('layouts.admin')

@section('title', 'Welcome')

@section('content')

    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card text-white-transparent-7 mb-3 overflow-hidden">
                <!-- BEGIN card-img-overlay -->
                <div class="card-img-overlay d-block d-lg-none bg-blue rounded"></div>
                <!-- END card-img-overlay -->

                <!-- BEGIN card-img-overlay -->
                <div class="card-img-overlay d-none d-md-block bg-blue rounded" style="background-image: url({{asset('admin/assets/img/bg/wave-bg.png')}}); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;"></div>
                <!-- END card-img-overlay -->

                <!-- BEGIN card-img-overlay -->
                <div class="card-img-overlay d-none d-md-block bottom-0 top-auto">
                    <div class="row">
                        <div class="col-md-8 col-xl-6"></div>
                        <div class="col-md-4 col-xl-6 mb-n2">
                            <img src="{{asset('admin/assets/img/page/dashboard.svg')}}" class="d-block ml-n3 mb-5" style="max-height: 310px" />
                        </div>
                    </div>
                </div>
                <!-- END card-img-overlay -->

                <!-- BEGIN card-body -->
                <div class="card-body position-relative">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-8 -->
                        <div class="col-md-8">
                            <!-- stat-top -->
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <h5 class="text-white-transparent-8 mb-3">Weekly Earning</h5>
                                    <h3 class="text-white mt-n1 mb-1">$2,999.80</h3>
                                    <p class="mb-1 text-white-transparent-6 text-truncate">
                                        <i class="fa fa-caret-up"></i> <b>32%</b> increase compare to last week
                                    </p>
                                </div>
                            </div>

                            <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                            <!-- stat-bottom -->
                            <div class="row">
                                <div class="col-6 col-lg-5">
                                    <div class="mt-1">
                                        <i class="fa fa-fw fa-shopping-bag fs-28px text-black-transparent-5"></i>
                                    </div>
                                    <div class="mt-1">
                                        <div>Store Sales</div>
                                        <div class="font-weight-600 text-white">$1,629.80</div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-5">
                                    <div class="mt-1">
                                        <i class="fa fa-fw fa-retweet fs-28px text-black-transparent-5"></i>
                                    </div>
                                    <div class="mt-1">
                                        <div>Referral Sales</div>
                                        <div class="font-weight-600 text-white">$700.00</div>
                                    </div>
                                </div>
                            </div>

                            <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                            <div class="mt-3 mb-2">
                                <a href="#" class="btn btn-yellow btn-rounded btn-sm pl-5 pr-5 pt-2 pb-2 fs-14px font-weight-600"><i class="fa fa-wallet mr-2 ml-n2"></i> Withdraw money</a>
                            </div>
                            <p class="fs-12px">
                                It usually takes 3-5 business days for transferring the earning to your bank account.
                            </p>
                        </div>
                        <!-- END col-8 -->

                        <!-- BEGIN col-4 -->
                        <div class="col-md-4 d-none d-md-block" style="min-height: 380px;"></div>
                        <!-- END col-4 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->

        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-sm-6">
                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange" style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="{{asset('admin/assets/img/icon/order.svg')}}" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">New Orders</h5>
                            <h3 class="text-white mt-n1">56</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
                            </div>
                            <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 16% increase <br />compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                        </div>
                        <!-- BEGIN card-body -->
                    </div>
                    <!-- END card -->

                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal" style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="{{asset('admin/assets/img/icon/visitor.svg')}}" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">Total Users</h5>
                            <h3 class="text-white mt-n1">60.5k</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                <div class="progrss-bar progress-bar-striped bg-white" style="width: 50%"></div>
                            </div>
                            <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 33% increase <br />compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->

                <!-- BEGIN col-6 -->
                <div class="col-sm-6">
                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink" style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="{{asset('admin/assets/img/icon/email.svg')}}" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">Unread email</h5>
                            <h3 class="text-white mt-n1">30</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
                            </div>
                            <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-down"></i> 5% decrease <br />compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->

                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo" style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="{{asset('admin/assets/img/icon/browser.svg')}}" class="ml-auto d-block mb-n3" style="max-height: 105px" />
                        </div>
                        <!-- end card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">Page Views</h5>
                            <h3 class="text-white mt-n1">320.4k</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                <div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
                            </div>
                            <div class="text-white-transparent-8 mb-4"><i class="fa fa-caret-up"></i> 20% increase <br />compare to last week</div>
                            <div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ml-2 text-white-transparent-5"></i></a></div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- BEGIN col-6 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->

    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Bestseller</h5>
                            <div class="fs-13px">Top 3 product sales this week</div>
                        </div>
                        <a href="#">See All</a>
                    </div>

                    <!-- product-1 -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center mr-3 width-50 height-50">
                            <img src="{{asset('admin/assets/img/product/product-1.jpg')}}" alt="" class="mw-100 mh-100" />
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <div class="text-primary fs-10px font-weight-600">TOP SALES</div>
                                <div class="text-dark font-weight-600">iPhone 11 Pro Max (256GB)</div>
                                <div class="fs-13px">$1,099</div>
                            </div>
                        </div>
                        <div class="pl-3 text-center">
                            <div class="text-dark font-weight-600">382</div>
                            <div class="fs-13px">sales</div>
                        </div>
                    </div>

                    <!-- product-2 -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center mr-3 width-50 height-50">
                            <img src="{{asset('admin/assets/img/product/product-2.jpg')}}" alt="" class="mw-100 mh-100" />
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <div class="text-dark font-weight-600">Macbook Pro 13 inch (2020)</div>
                                <div class="fs-13px">$1,120</div>
                            </div>
                        </div>
                        <div class="pl-3 text-center">
                            <div class="text-dark font-weight-600">102</div>
                            <div class="fs-13px">sales</div>
                        </div>
                    </div>

                    <!-- product-3 -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center mr-3 width-50 height-50">
                            <img src="{{asset('admin/assets/img/product/product-3.jpg')}}" alt="" class="mw-100 mh-100" />
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <div class="text-dark font-weight-600">Apple Watch Series 4(2020)</div>
                                <div class="fs-13px">$349</div>
                            </div>
                        </div>
                        <div class="pl-3 text-center">
                            <div class="text-dark font-weight-600">75</div>
                            <div class="fs-13px">sales</div>
                        </div>
                    </div>

                    <!-- product-4 -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center mr-3 width-50 height-50">
                            <img src="{{asset('admin/assets/img/product/product-4.jpg')}}" alt="" class="mw-100 mh-100" />
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <div class="text-dark font-weight-600">12.9-inch iPad Pro (256GB)</div>
                                <div class="fs-13px">$1,099</div>
                            </div>
                        </div>
                        <div class="pl-3 text-center">
                            <div class="text-dark font-weight-600">62</div>
                            <div class="fs-13px">sales</div>
                        </div>
                    </div>

                    <!-- product-5 -->
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center mr-3 width-50 height-50">
                            <img src="{{asset('admin/assets/img/product/product-5.jpg')}}" alt="" class="mw-100 mh-100" />
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <div class="text-dark font-weight-600">iPhone 11 (128gb)</div>
                                <div class="fs-13px">$799</div>
                            </div>
                        </div>
                        <div class="pl-3 text-center">
                            <div class="text-dark font-weight-600">59</div>
                            <div class="fs-13px">sales</div>
                        </div>
                    </div>
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->

        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Transaction</h5>
                            <div class="fs-13px">Latest transaction history</div>
                        </div>
                        <a href="#">See All</a>
                    </div>

                    <!-- BEGIN table-responsive -->
                    <div class="table-responsive mb-n2">
                        <table class="table table-borderless mb-0">
                            <thead>
                            <tr class="text-dark">
                                <th width="1%" class="pl-0">No</th>
                                <th>Order Details</th>
                                <th width="25%" class="text-center">Status</th>
                                <th width="15%" class="text-right pr-0">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pl-0">1.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="width-40 height-40">
                                            <img src="{{asset('admin/assets/img/icon/paypal2.svg')}}" class="mw-100 mh-100" />
                                        </div>
                                        <div class="ml-3 flex-grow-1">
                                            <div class="font-weight-600 text-dark">Macbook Pro 15 inch</div>
                                            <div class="fs-13px">5 minutes ago</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="label bg-success-transparent-2 text-success" style="min-width: 60px;">Success</span></td>
                                <td class="text-right pr-0">$1,699.00</td>
                            </tr>
                            <tr>
                                <td class="pl-0">2.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="width-40 height-40 rounded">
                                            <img src="{{asset('admin/assets/img/icon/mastercard.svg')}}" class="mw-100 mh-100" />
                                        </div>
                                        <div class="ml-3 flex-grow-1">
                                            <div class="font-weight-600 text-dark">Apple Watch 5 Series</div>
                                            <div class="fs-13px">5 minutes ago</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="label bg-success-transparent-2 text-success" style="min-width: 60px;">Success</span></td>
                                <td class="text-right pr-0">$699.00</td>
                            </tr>
                            <tr>
                                <td class="pl-0">3.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="width-40 height-40 rounded">
                                            <img src="{{asset('admin/assets/img/icon/visa.svg')}}" class="mw-100 mh-100" />
                                        </div>
                                        <div class="ml-3 flex-grow-1">
                                            <div class="font-weight-600 text-dark">iPhone 11 Pro Max</div>
                                            <div class="fs-13px">12 minutes ago</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="label bg-warning-transparent-2 text-warning" style="min-width: 60px;">Pending</span></td>
                                <td class="text-right pr-0">$1,299.00</td>
                            </tr>
                            <tr>
                                <td class="pl-0">4.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="width-40 height-40 rounded">
                                            <img src="{{asset('admin/assets/img/icon/paypal2.svg')}}" class="mw-100 mh-100" />
                                        </div>
                                        <div class="ml-3 flex-grow-1">
                                            <div class="font-weight-600 text-dark">Apple Magic Keyboard</div>
                                            <div class="fs-13px">15 minutes ago</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="label text-dark-transparent-5" style="min-width: 60px;">Cancelled</span></td>
                                <td class="text-right pr-0">$199.00</td>
                            </tr>
                            <tr>
                                <td class="pl-0">5.</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="width-40 height-40 rounded">
                                            <img src="{{asset('admin/assets/img/icon/mastercard.svg')}}" class="mw-100 mh-100" />
                                        </div>
                                        <div class="ml-3 flex-grow-1">
                                            <div class="font-weight-600 text-dark">iPad Pro 15 inch</div>
                                            <div class="fs-13px">15 minutes ago</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center"><span class="label bg-success-transparent-2 text-success" style="min-width: 60px;">Cancelled</span></td>
                                <td class="text-right pr-0">$1,099.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END table-responsive -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->


@endsection
