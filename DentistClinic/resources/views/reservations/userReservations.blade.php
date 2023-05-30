@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-10">
        <h1 style="text-align:justify">List of yours reservations</h1>
    </div>
</div>
<div class="row">
    <hr/>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Reservation Id</th>
      <th scope="col-2">Service Name</th>
      <th scope="col">Reservation Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservations as $reservation)
    <tr>
        <th scope="row">{{ $reservation-> id }}</th>
        <td scope="row">{{ $reservation-> name }}</td>
        <td>{{ $reservation-> reservationDate }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection