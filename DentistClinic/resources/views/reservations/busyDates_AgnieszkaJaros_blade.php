@extends('layouts.app')

@section('content')
<div class="container">
<h1 style="text-align:center">Reservation Calendar</h1>

        <div class="row">
            @foreach($occupiedHours as $date => $hours)
                @if(count($hours) > 0)
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-header">{{ $date }}</div>
                            <ul class="list-group list-group-flush">
                                @foreach($hours as $hour)
                                    <li class="list-group-item">{{ $hour }}:00</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</div>
@endsection