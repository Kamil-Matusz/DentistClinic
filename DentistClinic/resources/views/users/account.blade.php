@extends('layouts.app')

@section('content')
<div class="container">
            <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
                <div class="card" style="text-align:center">
                    <div class="card-body">
                        <h5 class="card-title">Account Name: {{ Auth::user()->name }}</h5>
                        <p class="card-text">Email address: {{ Auth::user()->email }}</p>
                        <p class="card-text">Phone Number: {{ Auth::user()->phoneNumber }}</p>
                        <p class="card-text">Account created: {{ Auth::user()->created_at }}</p>
                    </div>
                </div>
            </div>
</div>
@endsection