@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">{{ $broker->name }} all details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Update.Broker', $broker->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="broker">Broker Name</label>
                                    <input type="text" name="name" class="form-control" id="broker" required
                                        value="{{ $broker->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="amount">Amount Given</label>
                                    <input type="number" name="amount" class="form-control" id="amount" required
                                    value="{{ $broker->amount }}">
                                </div>
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control" cols="30" rows="10">{{ $broker->note }}</textarea>
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
