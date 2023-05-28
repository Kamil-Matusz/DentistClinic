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

                    <h2 style="text-align: center">
                        <a href="{{ route('users.account') }}">
                        <button class="btn btn-success btn-lg">Info about your account</button>
                        </a>
                    </h2>

                    @can('isAdmin')
                    <h2 style="text-align: center">
                        <a href="/adminpanel">
                        <button class="btn btn-success btn-lg">Admin Panel</button>
                        </a>
                    </h2>
                    @endcan

                </div>
            </div>
            @can('isUser')
            <div class="card">
            <img src="{{('images/wallpaper.jpg')}}" class="img-fluid" alt="Responsive image">
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection
