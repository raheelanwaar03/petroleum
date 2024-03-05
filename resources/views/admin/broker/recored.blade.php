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
                                            <th>Buyer</th>
                                            <th>Liter</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Method</th>
                                            <th>Selling Date</th>
                                            <th>Due Date</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($recored as $item)
                                            <tr>
                                                <td>{{ $item->fuel }}</td>
                                                <td>{{ $item->buyer }}</td>
                                                <td>{{ $item->liter }} Liters</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->total_price }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->method }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->due_date }}</td>
                                                <td>{{ $item->note ?? 'null' }}</td>
                                                <td>
                                                    <a href="{{ route('Edit.Recored', $item->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="{{ route('Delete.Recored', $item->id) }}"
                                                        class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Fuel</th>
                                            <th>Buyer</th>
                                            <th>Liter</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Method</th>
                                            <th>Selling Date</th>
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
