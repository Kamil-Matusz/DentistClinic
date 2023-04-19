@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-10">
        <h1>Service List</h1>
    </div>
    @can('isAdmin')
    <div class="col-2">
          <a class="float-right" href="{{ route('services.create') }}"> <button type="button" class="btn btn-success">Add new service</button></a>
        </div>
    @endcan
</div>
<div class="row">
    <hr/>
<table class="table table-hover">
  <thead>
    <tr>
    @can('isAdmin')
      <th scope="col">ID</th>
    @endcan
      <th scope="col-2">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Type</th>
      <th scope="col-2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($services as $service)
    <tr>
        @can('isAdmin')
        <th scope="row">{{ $service-> id }}</th>
        @endcan
        <td>{{ $service-> name }}</td>
        <td>{{ $service-> price }}</td>
        <td>@if($service->hasType()){{ $service->type->type_name }}@endif</td>
        <td>
            <a href="{{ route('services.show', $service->id) }}">
            <button class="btn btn-info btn-sm">Details</button>
            </a>
            @can('isAdmin')
            <a href="{{ route('services.edit', $service->id) }}">
            <button class="btn btn-warning btn-sm">Edit</button>
            </a>
            <a href="{{ route('services.destroy', $service->id) }}">
            <button class="btn btn-danger btn-sm">Delete</button>
            </a>
            @endcan
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $services->links() }}
</div>
</div>
@endsection