@extends('layouts.default')

@section('content')
  <div class="wrapper">
    <nav class="header">
      <div class="logo">
        <a href="#">
          <img src="{{ asset('img/logo.png') }}" alt="logo">
        </a>
      </div>
    </nav>
    <div class="home-wrapper">
      <div class="jumbo">
        <div class="boxes">
          <div class="jumbo-box box-top"></div>
          <div class="jumbo-box box-middle"></div>
          <div class="jumbo-box box-bottom"></div>
        </div>
        <div class="jumbo-vp">
          <h1>
            <span class="vp-creativity">Creativity.</span>
            <span class="vp-design">Design.</span>
            <span class="vp-innovation">Innovation.</span>
          </h1>
        </div>
      </div>
      {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium fugit incidunt rerum suscipit voluptatibus! Atque dicta eaque error explicabo harum mollitia nemo nisi non quod reprehenderit, saepe sed sit ut.--}}
    </div>
  </div>
@endsection
