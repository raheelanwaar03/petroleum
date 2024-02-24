@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">{{ $vehicle->name }}'s all details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Update.Vehicale', $vehicle->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ $vehicle->name }}" class="form-control"
                                        id="name" placeholder="Vehicle name">
                                </div>
                                <div class="form-group">
                                    <label for="number">Number</label>
                                    <input type="text" name="number" value="{{ $vehicle->number }}" class="form-control"
                                        id="number" placeholder="ABC 1234">
                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" name="model" value="{{ $vehicle->model }}" class="form-control"
                                        id="model" placeholder="2010 etc.">
                                </div>
                                <div class="form-group">
                                    <label for="province">Province</label>
                                    <select name="province" class="form-control" aria-valuenow="{{ $vehicle->province }}"
                                        id="province">
                                        <option value="Punjab">Punjab</option>
                                        <option value="Sindh">Sindh</option>
                                        <option value="KPK">KPK</option>
                                        <option value="Balochistan">Balochistan</option>
                                        <option value="Islamabad">Islamabad</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Update Details</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
