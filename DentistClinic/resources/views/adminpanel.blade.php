@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 text-center bg-light">
        <h1 class="mb-4 col col-md-12">Admin Panel</h1>
                <a class="btn btn-primary" href="/users/list" role="button">Users Managment</a>
                <br/>
                <br/>
                <a class="btn btn-secondary" href="/reservations" role="button">Reservation Managment</a>
                <br/>
                <br/>
                <a class="btn btn-primary" href="{{ route('services.index') }}" role="button">Services List</a>
                <br/>
                <br/>
                <a class="btn btn-success" href="{{ route('services.create') }}" role="button">Add New Services</a>
    </div>
</div>
@endsection