@extends('layouts.app')

@section('title')
Venue-Hunter
@endsection

@section('content')

<div class="title-div">
	<div class="slayer-font">
		GOTCHA
	</div>
</div>
<div class="embed-frame">
	<iframe class="embeded-video" id="myVideo" width="800" height="400" src="https://www.youtube.com/embed/1Obuw1ahBrs?rel=0&amp;controls=0&autoplay=1&mute=1" frameborder="0" gesture="media" volume="0" allow="encrypted-media" allowfullscreen></iframe>
</div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    <!-- <script src="{{ asset('js/embed.js') }}"></script> -->
@endsection


