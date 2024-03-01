@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Expense</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Update.Expense', $expense->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="type">Expense Type</label>
                                    <input type="text" name="type" id="type" value="{{ $expense->type }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="expense">Amount</label>
                                    <input type="number" name="amount" value="{{ $expense->amount }}" class="form-control"
                                        id="expense">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
