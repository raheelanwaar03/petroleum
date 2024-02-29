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
                            <h4 class="card-title">Buying Petrol Data</h4>
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Add New</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Owner</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pumps as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->owner }}</td>
                                                <td>{{ $item->location }}</td>
                                                <td>
                                                    <a href="{{ route('Edit.Buying.Record', $item->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="{{ route('Delete.Pump', $item->id) }}"
                                                        class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Owner</th>
                                            <th>Location</th>
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
                            <form action="{{ route('Store.Pump') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="pump">Pump Name</label>
                                    <input type="text" name="name" class="form-control" id="pump" required
                                        placeholder="Pump name">
                                </div>
                                <div class="form-group">
                                    <label for="owner">Owner</label>
                                    <input type="text" name="owner" class="form-control" id="owner" required
                                        placeholder="Owner Name">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" required class="form-control" id="location"
                                        placeholder="Pump location">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Pump</button>
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
