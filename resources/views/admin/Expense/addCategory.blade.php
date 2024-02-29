@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.Expense.Category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="expense">Expense Type</label>
                                    <input type="text" name="type" class="form-control" id="liter"
                                        placeholder="Add Expense">
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
