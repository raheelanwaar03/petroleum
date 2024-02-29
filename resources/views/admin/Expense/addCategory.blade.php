@extends('admin.layout.app')

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
                            <form action="{{ route('store.Expense.Category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="type">Expense Type</label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="Daily Expense">Daily Expense</option>
                                        <option value="Transport">Transport</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="expense">Amount</label>
                                    <input type="number" name="amount" class="form-control" id="expense"
                                        placeholder="Total Expense in pkr">
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
