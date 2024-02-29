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
                            <form action="{{ route('Update.Buying.Record', $fuel->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="fuel">Fuel</label>
                                    <select name="fuel" class="form-control" required id="fuel">
                                        <option value="Petrol">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Solvent">Solvent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="liter">Liter</label>
                                    <input type="number" name="liter" value="{{ $fuel->liter }}" class="form-control"
                                        id="liter" placeholder="20 liter">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" value="{{ $fuel->price }}" class="form-control"
                                        id="price" placeholder="274.80 pkr">
                                </div>
                                <div class="form-group">
                                    <label for="total_price">Total Price</label>
                                    <input type="number" name="total_price" value="{{ $fuel->total_price }}"
                                        class="form-control" id="total_price" placeholder="10,000">
                                </div>
                                <div class="form-group">
                                    <label for="buyer">Seller</label>
                                    <input type="text" name="seller" value="{{ $fuel->seller }}" class="form-control"
                                        id="buyer" placeholder="Seller Name">
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
