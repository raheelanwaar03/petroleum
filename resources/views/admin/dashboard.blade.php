@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6 col-xxl-12">
                                    <div class="card" id="user-activity">
                                        <div class="card-header border-0 pb-0 flex-wrap">
                                            <div>
                                                <span class="mb-3 d-block fs-16">Current Balance</span>
                                                <h4 class="fs-24 font-w700 mb-3">$ 24,567.33</h4>
                                            </div>
                                            <div class="current-icon">
                                                <a href="javascript:void(0);"><i class="fas fa-long-arrow-alt-up"></i></a>
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
