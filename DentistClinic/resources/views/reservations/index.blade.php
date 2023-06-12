@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<div class="row">
    <div class="col-10">
        <h1>All Reservation on the Dentist Clinic</h1>
    </div>
</div>
<div class="row">
    <hr/>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col-2">Service Name</th>
      <th scope="col">Booker Name</th>
      <th scope="col">Booker Surname</th>
      <th scope="col">Reservation Date</th>
      <th scope="col">Delete Reservation</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservations as $reservation)
    <tr>
        <th scope="row">{{ $reservation-> id }}</th>
        <td scope="row">{{ $reservation-> name }}</td>
        <td>{{ $reservation-> bookerName }}</td>
        <td>{{ $reservation-> bookerSurname }}</td>
        <td>{{ $reservation-> reservationDate }}</td>
        <td>
        <a href="{{ route('reservations.destroy', $reservation->id) }}">
            <button class="btn btn-danger btn-sm">Delete reservation</button>
            </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection