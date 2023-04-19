@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style="text-align:center">{{ __('You are logged in!') }}</h1>
                    <br/>
                    <h2 style="text-align: center">{{ __('Use selected services') }}</h2>
                </div>
            </div>
            <div class="card">
            <img src="{{('images/wallpaper.jpg')}}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
@endsection
