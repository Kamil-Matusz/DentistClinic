@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 10%;">
                <div class="card-header" style="text-align: center;">Service Details</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $service->name }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{ $service->price }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" maxlength="1500" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" disabled>{{ $service->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-end">Type</label>

                        <div class="col-md-6">
                            <select id="price" class="form-control" name="type_id" disabled>
                                @if($service->hasType())
                                    <option>{{ $service->type->type_name }}</option>
                                @else
                                    <option>Brak</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            </br>
            <a class="nav-link" href="{{ route('services.index') }}" style="text-align:center">
                <button class="btn btn-success btn-sm">Return to Services List</button>
            </a>
    </div>
</div>
@endsection