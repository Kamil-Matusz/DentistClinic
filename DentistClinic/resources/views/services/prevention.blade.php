@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-10">
    </div>
    @can('isAdmin')
    <div class="col-2">
          <a class="float-right" href="{{ route('services.create') }}"> <button type="button" class="btn btn-success">Add new service</button></a>
        </div>
    @endcan
    <figure class="text-center">
        <blockquote class="blockquote">
          <h2>Prevention</h2>
        </blockquote>
          <figcaption class="blockquote-footer">
            <h5 class="text-justify">Implantology is currently the most perfect method to replace missing teeth. Implants are very practical, durable and eliminate the discomfort that can often be felt when using removable dentures.
                An implant is a small, titanium screw that, when implanted in the jawbone, replaces the tooth root. A porcelain or ceramic crown is mounted on it, the shade of which can be matched to the shade of natural teeth. The feeling of having such a tooth in practice is no different from natural teeth.</h5>
          </figcaption>
          <img src="{{URL('images/prevention.jpg')}}" class="img-thumbnail">
      </figure>
</div>
<div class="row">
    <hr/>
<table class="table table-hover">
  <thead>
    <tr>
    @can('isAdmin')
      <th scope="col">#</th>
    @endcan
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
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
        <td>{{ $service-> description }}</td>
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
            @can('isUser')
            <a href="{{ route('reservations.create') }}">
            <button class="btn btn-success btn-sm">Reserve Service</button>
            </a>
            @endcan
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection