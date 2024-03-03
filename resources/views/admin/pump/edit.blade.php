@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">Pump details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Update.Pump', $pump->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="pump">Pump Name</label>
                                    <input type="text" name="name" value="{{ $pump->name }}" class="form-control" id="pump">
                                </div>
                                <div class="form-group">
                                    <label for="owner">Owner</label>
                                    <input type="text" name="owner" value="{{ $pump->owner }}" class="form-control" id="owner">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" value="{{ $pump->location }}" class="form-control" id="location">
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
