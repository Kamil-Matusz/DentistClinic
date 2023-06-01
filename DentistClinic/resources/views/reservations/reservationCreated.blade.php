@extends('layouts.app')

@section('content')
        <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-top: 5%">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align:center">Your booking has been successfully created</h2>
                    </div>
                </div>
            </div>
        </div>
            <br/>
            <a class="nav-link" href="{{ route('services.index') }}" style="text-align:center">
                <button class="btn btn-success btn-sm">Return to Services List</button>
            </a>
            <br/>
            <a class="nav-link" href="{{ route('reservations.userReservations') }}" style="text-align:center">
                <button class="btn btn-success btn-sm">Display your reservations list</button>
            </a>
    </div>
@endsection