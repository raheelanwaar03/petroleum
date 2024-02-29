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
                            <h4 class="card-title">Add Expense</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Store.Salary') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="employee">Employee Name</label>
                                    <input type="text" name="name" class="form-control" id="employee" required
                                        placeholder="Employee Name">
                                </div>
                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="number" name="salary" class="form-control" id="salary" required
                                        placeholder="Salary">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="Given">Given</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="province">Date</label>
                                    <input type="text" class="form-control" name="date" required
                                        placeholder="2017-06-04" id="mdate">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
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
