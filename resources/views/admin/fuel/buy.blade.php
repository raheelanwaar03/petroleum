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
    <style>
        .advanced-field {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Buying</h4>
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Add New</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Fuel</th>
                                            <th>Seller</th>
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
                                        @forelse ($records as $item)
                                            <tr>
                                                <td>{{ $item->fuel }}</td>
                                                <td>{{ $item->seller }}</td>
                                                <td>{{ $item->liter }} Liters</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->total_price }}</td>
                                                <td>{{ $item->status }}</td>
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
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Fuel</th>
                                            <th>Seller</th>
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
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Record</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('Store.Buying.Record') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="fuel">Fuel</label>
                                    <input type="text" name="fuel" id="fuel" placeholder="Add Fuel"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" id="price" required
                                        placeholder="274.80 pkr">
                                </div>
                                <div class="form-group">
                                    <label for="liter">Liter</label>
                                    <input type="number" name="liter" required class="form-control" id="liter"
                                        placeholder="20 liter">
                                </div>
                                <div class="form-group">
                                    <label for="seller">Seller Name</label>
                                    <select name="seller" id="seller" required class="form-control">
                                        @foreach ($broker as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-2">
                                    <label for="">Status</label>
                                    <select name="status" id="selectField">
                                        <option value="Clear">Clear</option>
                                        <option value="Advance">Advance</option>
                                    </select>
                                    <div id="advancedField" class="advanced-field">
                                        <label for="advancedInput">Advanced Amount:</label>
                                        <input type="text" name="advance" id="advancedInput">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="method">Payment Method</label>
                                    <input type="text" name="method" placeholder="Enter Payment Method" id="method"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" cols="15" rows="5" placeholder="Enter further details"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="province">Buying Date</label>
                                    <input type="text" class="form-control" name="date" required
                                        placeholder="2017-06-04" id="mdate">
                                </div>
                                <div class="form-group">
                                    <label for="due">Due Date</label>
                                    <input type="text" name="due_date" class="datepicker-default form-control" id="datepicker">
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
    <script>
        document.getElementById('selectField').addEventListener('change', function() {
            var selectedValue = this.value;
            var advancedField = document.getElementById('advancedField');

            if (selectedValue === 'Advance') {
                advancedField.style.display = 'block';
            } else {
                advancedField.style.display = 'none';
            }
        });
    </script>
@endsection
