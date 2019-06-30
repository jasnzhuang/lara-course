@extends('layout')
@section('title','Details for:'.$customers->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for:{{ $customers->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p><strong>Name:</strong>{{ $customers->name }}</p>
            <p><strong>Email:</strong>{{ $customers->email }}</p>
            <p><strong>Company:</strong>{{ $customers->company->name }}</p>
        </div>
    </div>

@endsection
