@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-10">
        <h1>Yours Reservations</h1>
    </div>
</div>
<div class="row">
    <hr/>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col-2">Service Name</th>
      <th scope="col">Booker Name</th>
      <th scope="col">Booker Surname</th>
      <th scope="col">Reservation Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservations as $reservation)
    <tr>
        <td scope="row">{{ $reservation-> name }}</td>
        <td>{{ $reservation-> bookerName }}</td>
        <td>{{ $reservation-> bookerSurname }}</td>
        <td>{{ $reservation-> reservationDate }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection