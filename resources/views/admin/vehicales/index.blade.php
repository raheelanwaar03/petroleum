@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Vehicales</h4>
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCenter">Add New</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Model</th>
                                            <th>province</th>
                                            <th>Adding Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($vehicles as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->number }}</td>
                                                <td>{{ $item->model }}</td>
                                                <td>{{ $item->province }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Model</th>
                                            <th>Provience</th>
                                            <th>Adding Date</th>
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
                            <h5 class="modal-title">Add New Vehicle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('Store.Vehicale') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Vehicle name">
                                </div>
                                <div class="form-group">
                                    <label for="number">Number</label>
                                    <input type="text" name="number" class="form-control" id="number"
                                        placeholder="ABC 1234">
                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" name="model" class="form-control" id="model"
                                        placeholder="2010 etc.">
                                </div>
                                <div class="form-group">
                                    <label for="province">Province</label>
                                    <select name="province" class="form-control" id="type">
                                        <option value="Punjab">Punjab</option>
                                        <option value="Sindh">Sindh</option>
                                        <option value="KPK">KPK</option>
                                        <option value="Balochistan">Balochistan</option>
                                        <option value="Islamabad">Islamabad</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Vehicle</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- datatabel --}}
    <script src="{{ asset('assets/public/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/js/plugins-init/datatables.init.js') }}"></script>
@endsection
