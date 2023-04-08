@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-10">
        <h1>Service List</h1>
    </div>
    <div class="col-2">
          <a class="float-right" href="{{ route('services.create') }}"> <button type="button" class="btn btn-primary">Add new service</button></a>
        </div>
</div>
<div class="row">
    <hr/>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($services as $service)
    <tr>
        <th scope="row">{{ $service-> id }}</th>
        <td>{{ $service-> name }}</td>
        <td>{{ $service-> price }}</td>
        <td>{{ $service-> description }}</td>
        <td>
            <a href="{{ route('services.edit', $service->id) }}">
            <button class="btn btn-info btn-sm">Edit</button>
            </a>
            <a href="{{ route('services.show', $service->id) }}">
            <button class="btn btn-info btn-sm primary">Details</button>
            </a>
            <button class="btn btn-danger btn-sm delete" data-id="{{ $service->id }}">Delete</button>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection