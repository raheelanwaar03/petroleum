@extends('admin.layout.app')

@section('links')
    <link href="{{ asset('assets/public/assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/public/assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/public/assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link
        href="{{ asset('assets/public/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/public/assets/vendor/pickadate/themes/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/public/assets/vendor/pickadate/themes/default.date.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-danger">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="me-3">
                                    <i class="flaticon-381-calendar-1"></i>
                                </span>
                                <div class="media-body text-white text-end">
                                    <p class="mb-1">Creadit</p>
                                    <h3 class="text-white">{{ $total_advance }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-success">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="me-3">
                                    <i class="flaticon-381-calendar-1"></i>
                                </span>
                                <div class="media-body text-white text-end">
                                    <p class="mb-1">Debit</p>
                                    <h3 class="text-white">{{ $debit }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Transcations with {{ $name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Fuel</th>
                                            @if ($role == 'Seller')
                                                <th>Buyer</th>
                                            @else
                                                <th>Seller</th>
                                            @endif
                                            <th>Liter</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Advance</th>
                                            <th>Remaning</th>
                                            <th>Method</th>
                                            <th>Buying Date</th>
                                            <th>Due Date</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($role == 'Seller')
                                            @forelse ($recored as $item)
                                                <tr>
                                                    <td>{{ $item->fuel }}</td>
                                                    <td>{{ $item->buyer }}</td>
                                                    <td>{{ $item->liter }} Liters</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->total_price }}</td>
                                                    <td>
                                                        @if ($item->status == 'Clear')
                                                            <p class="badge badge-success">
                                                                {{ $item->status }}
                                                            </p>
                                                        @else
                                                            <p class="badge badge-info">
                                                                {{ $item->status }}
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->advance ?? 'None' }}</td>
                                                    <td>{{ $item->remaning }}</td>
                                                    <td>{{ $item->method }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->due_date }}</td>
                                                    <td>{{ $item->note ?? 'null' }}</td>
                                                    <td>
                                                        <a href="{{ route('Edit.Buying.Record', $item->id) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="{{ route('Delete.Buying.Record', $item->id) }}"
                                                            class="btn btn-sm btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        @else
                                            @forelse ($recored as $item)
                                                <tr>
                                                    <td>{{ $item->fuel }}</td>
                                                    <td>{{ $item->seller }}</td>
                                                    <td>{{ $item->liter }} Liters</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ $item->total_price }}</td>
                                                    <td>
                                                        @if ($item->status == 'Clear')
                                                            <p class="badge badge-success">
                                                                {{ $item->status }}
                                                            </p>
                                                        @else
                                                            <p class="badge badge-info">
                                                                {{ $item->status }}
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->advance ?? 'None' }}</td>
                                                    <td>{{ $item->remaning }}</td>
                                                    <td>{{ $item->method }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->due_date }}</td>
                                                    <td>{{ $item->note ?? 'null' }}</td>
                                                    <td>
                                                        <a href="{{ route('Edit.Buying.Record', $item->id) }}"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="{{ route('Delete.Buying.Record', $item->id) }}"
                                                            class="btn btn-sm btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Fuel</th>
                                            @if ($role == 'Seller')
                                                <th>Buyer</th>
                                            @else
                                                <th>Seller</th>
                                            @endif
                                            <th>Liter</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Advance</th>
                                            <th>Remaning</th>
                                            <th>Method</th>
                                            <th>Buying Date</th>
                                            <th>Due Date</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/public/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/datatables.init.js') }}"></script>
@endsection
