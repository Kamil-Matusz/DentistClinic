@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{ $user-> id }}</th>
        <td>{{ $user-> name }}</td>
        <td>{{ $user-> email }}</td>
        <td>{{ $user-> phoneNumber }}</td>
        <td>
        <a href="{{ route('users.destroy', $user->id) }}">
            <button class="btn btn-danger btn-sm">Delete</button>
            </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection