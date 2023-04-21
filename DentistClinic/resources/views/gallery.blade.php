@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="{{URL('images/gallery_1.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
    src="{{URL('images/gallery_2.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
    src="{{URL('images/gallery_3.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
    src="{{URL('images/gallery_4.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
    src="{{URL('images/gallery_5.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
    src="{{URL('images/gallery_6.jpg')}}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
    </div>
@endsection