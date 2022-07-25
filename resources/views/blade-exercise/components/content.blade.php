@extends('blade-exercise.laravel-training')
@section('content')
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

@include('blade-exercise.components.navbar')

<div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <h2>About Me</h2>
        <h5>Photo of me:</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        <h3>Some Links</h3>
        <p>Lorem ipsum dolor sit ame.</p>
        @php
          $links = ['Link1', 'Link2', 'Link3'];
          $check = false   
        @endphp
        <ul class="nav nav-pills flex-column">
          @if($check)
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
          @endif
          @foreach ($links as $link)
            <li class="nav-item">
              <a class="nav-link" href="#">{{ $link }}</a>
            </li>
          @endforeach
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>
  </div>
  
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
  </div>
  @endsection