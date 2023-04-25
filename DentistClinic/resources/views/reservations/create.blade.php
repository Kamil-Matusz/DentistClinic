@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creating new Reservation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservations.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="BookerName" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="bookerName" type="text" maxlenght="255" class="form-control @error('bookerName') is-invalid @enderror" name="bookerName" value="{{ old('bookerName') }}" required autocomplete="bookerName" autofocus>

                                @error('bookerName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="BookerSurname" class="col-md-4 col-form-label text-md-end">Surname</label>
                            <div class="col-md-6">
                                <input id="bookerSurname" type="text" maxlenght="255" class="form-control @error('bookerSurname') is-invalid @enderror" name="bookerSurname" value="{{ old('bookerSurname') }}" required autocomplete="bookerSurname" autofocus>

                                @error('bookerSurname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ReservationDate" class="col-md-4 col-form-label text-md-end">Reservation Date</label>
                            <div class="col-md-6">
                                <input id="reservationDate" type="datetime-local" class="form-control @error('resevationDate') is-invalid @enderror" name="reservationDate" value="{{ old('reservationDate') }}" required autocomplete="reservationDate" autofocus>

                                @error('reservationDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="services" maxlength="1500" class="col-md-4 col-form-label text-md-end">Service</label>

                            <div class="col-md-6">
                                <select id="serviceId" class="form-control @error('serviceId') is-invalid @enderror" name="serviceId">
                                    <option value="">Brak</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>

                                @error('serviceId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection