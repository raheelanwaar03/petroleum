@extends('admin.layout.app')

@section('links')
    <style>
        .advanced-field {
            display: none;
        }
    </style>
@endsection

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
                                    <input type="text" name="fuel" class="form-control" id="fuel"
                                        class="from-control" value="{{ $fuel->fuel }}">
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
                                    <label for="seller">Seller</label>
                                    <select name="seller" id="seller" required class="form-control">
                                        @foreach ($broker as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-2">
                                    <label for="">Status</label>
                                    <select name="status" id="selectField">
                                        <option value="Clear">Clear</option>
                                        <option value="Advance">Advance</option>
                                    </select>
                                    <div id="advancedField" class="advanced-field">
                                        <label for="advancedInput">Advanced Amount:</label>
                                        <input type="text" value="{{ $fuel->advanc }}" name="advance" id="advancedInput">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="method">Method</label>
                                    <input type="text" class="form-control" value="{{ $fuel->method }}" name="method">
                                </div>
                                <div class="form-group">
                                    <label for="province">Date</label>
                                    <input type="text" class="form-control" value="{{ $fuel->date }}" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="due">Due Date</label>
                                    <input type="text" class="form-control" value="{{ $fuel->due_date }}"
                                        name="due_date">
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

@section('script')
    <script>
        document.getElementById('selectField').addEventListener('change', function() {
            var selectedValue = this.value;
            var advancedField = document.getElementById('advancedField');

            if (selectedValue === 'Advance') {
                advancedField.style.display = 'block';
            } else {
                advancedField.style.display = 'none';
            }
        });
    </script>
@endsection
