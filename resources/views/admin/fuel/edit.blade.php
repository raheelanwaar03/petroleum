@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Update.Recored', $fuel->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="liter">Liter</label>
                                    <input type="text" name="liter" value="{{ $fuel->liter }}"
                                        class="form-control" id="liter" placeholder="20 liter">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" value="{{ $fuel->price }}" class="form-control"
                                        id="price" placeholder="274.80 pkr">
                                </div>
                                <div class="form-group">
                                    <label for="total_price">Total Price</label>
                                    <input type="text" name="total_price" value="{{ $fuel->total_price }}"
                                        class="form-control" id="total_price" placeholder="10,000">
                                </div>
                                <div class="form-group">
                                    <label for="buyer">Buyer Name</label>
                                    <input type="text" name="buyer" value="{{ $fuel->buyer }}" class="form-control"
                                     id="buyer" placeholder="Buyer Name">
                                </div>
                                <div class="form-group">
                                    <label for="payment">Payment</label>
                                    <select name="status" class="form-control" aria-valuenow="{{ $fuel->status }}"
                                        id="payment">
                                        <option value="Pending">Pending</option>
                                        <option value="Clear">Clear</option>
                                        <option value="Few Left">Few Left</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="province">Date</label>
                                    <input type="text" class="form-control" value="{{ $fuel->date }}" name="date">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
