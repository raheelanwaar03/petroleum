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
                                    <label for="fuel">Fuel</label>
                                    <input type="text" name="fuel" value="{{ $fuel->fuel }}" class="form-control"
                                        id="liter">
                                </div>
                                <div class="form-group">
                                    <label for="liter">Liter</label>
                                    <input type="text" name="liter" value="{{ $fuel->liter }}" class="form-control"
                                        id="liter">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" value="{{ $fuel->price }}" class="form-control"
                                        id="price">
                                </div>
                                <div class="form-group">
                                    <label for="total_price">Total Price</label>
                                    <input type="number" name="total_price" value="{{ $fuel->total_price }}"
                                        class="form-control" id="total_price">
                                </div>
                                <div class="form-group">
                                    <label for="buyer">Buyer</label>
                                    <select name="buyer" id="buyer" required class="form-control">
                                        @foreach ($broker as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" value="{{ $fuel->status }}" name="status">
                                </div>
                                <div class="form-group">
                                    <label for="method">Payment Method</label>
                                    <input type="text" class="form-control" value="{{ $fuel->method }}" name="method">
                                </div>
                                <div class="form-group">
                                    <label for="province">Date</label>
                                    <input type="text" class="form-control" value="{{ $fuel->date }}" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="due">Due Date</label>
                                    <input type="text" class="form-control" value="{{ $fuel->date }}" name="due_date">
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
