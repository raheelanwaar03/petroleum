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
                            <h4 class="card-title">All Recoreds</h4>
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Add New</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Buyer</th>
                                            <th>Liter</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($records as $item)
                                            <tr>
                                                <td>{{ $item->buyer }}</td>
                                                <td>{{ $item->liter }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->total_price }}</td>
                                                <td>
                                                    @if ($item->status == 'Pending')
                                                        <span class="badge badge-danger">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'Clear')
                                                        <span class="badge badge-success">{{ $item->status }}</span>
                                                    @else
                                                        <span class="badge badge-warning">{{ $item->status }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->date }}</td>
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
                                            <th>Buyer</th>
                                            <th>Liter</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Record</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('Store.Recored') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="liter">Liter</label>
                                    <input type="text" name="liter" required class="form-control" id="liter"
                                        placeholder="20 liter">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" required
                                        placeholder="274.80 pkr">
                                </div>
                                <div class="form-group">
                                    <label for="total_price">Total Price</label>
                                    <input type="text" name="total_price" class="form-control" id="total_price" required
                                        placeholder="10,000">
                                </div>
                                <div class="form-group">
                                    <label for="buyer">Buyer Name</label>
                                    <input type="text" name="buyer" class="form-control" required id="buyer"
                                        placeholder="Buyer Name">
                                </div>
                                <div class="form-group">
                                    <label for="payment">Payment</label>
                                    <select name="status" class="form-control" id="payment">
                                        <option value="Pending">Pending</option>
                                        <option value="Clear">Clear</option>
                                        <option value="Few Left">Few Left</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="province">Date</label>
                                    <input type="text" class="form-control" name="date" required
                                        placeholder="2017-06-04" id="mdate">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Store Record</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/public/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/datatables.init.js') }}"></script>
    {{-- DatePicker --}}
    <script src="{{ asset('assets/public/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <script
        src="{{ asset('assets/public/assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>
    <script src="{{ asset('assets/public/assets/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/clock-picker-init.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/material-date-picker-init.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/pickadate-init.js') }}"></script>
@endsection
