@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                <div class="card-body user-profile pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 text-start">
                                            <h4 class="fs-18 font-w600">Total Users</h4>
                                        </div>
                                        <div class="p-2">
                                            <h4>({{ total_users() }})</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                <div class="card-body user-profile pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 text-start">
                                            <h4 class="fs-18 font-w600">Total Vehicles</h4>
                                        </div>
                                        <div class="p-2">
                                            <h4>({{ all_vehicles() }})</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                <div class="card-body user-profile pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 text-start">
                                            <h4 class="fs-18 font-w600">Pending Payments</h4>
                                        </div>
                                        <div class="p-2">
                                            <h4>({{ pending_payment() }})</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                <div class="card-body user-profile pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 text-start">
                                            <h4 class="fs-18 font-w600">Cleard Payments</h4>
                                        </div>
                                        <div class="p-2">
                                            <h4>({{ clear_payment() }})</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                <div class="card-body user-profile pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 text-start">
                                            <h4 class="fs-18 font-w600">Residuals</h4>
                                        </div>
                                        <div class="p-2">
                                            <h4>({{ few_payment() }})</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
                            <div class="card contact-bx item-content">
                                <div class="card-body user-profile pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3 text-start">
                                            <h4 class="fs-18 font-w600">Total Payment</h4>
                                        </div>
                                        <div class="p-2">
                                            <h4>({{ total_payment() }})</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
