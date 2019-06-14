@extends('layout')
@section('title','Customers List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="customers" method="post" class="pb-5">
                <div class="form-group ">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group ">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label for="active">Status:</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled>please selct:</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <ul>
                <h3>Active Customers</h3>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name }} <span class="text-muted"> ({{ $activeCustomer->email }})</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-6">
            <ul>
                <h3>Inactive Customers</h3>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li>{{ $inactiveCustomer->name }} <span class="text-muted"> ({{ $inactiveCustomer->email }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
