@extends('layouts.app')

@section('title', 'DashBoard')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-8 col-md-offset-2">

                  @if (Session::has('success_message'))
                        {{Session::get('success_message')}}
                  @elseif (Session::has('fail_message'))
                        {{Session::get('fail_message')}}
                  @endif

                  <div class="panel panel-default">

                        <figure id="header-banner" class="header-image-wrapper header-module">
                              <a href="#" class="header-image cover loaded imgLiquid_bgSize imgLiquid_ready">
                                    <img src="https://source.unsplash.com/750x190" alt="banner">
                              </a>
                        </figure>


                        <section class="panel-body content has-banner has-avatar avatar-style-circle has-title has-description has-nav">
                              <header id="header" class="blog-header" role="banner">
                                    <a href="#" id="header-avatar" class="blogger-avatar header-module ease">
                                    <img src="{{\Auth::user()->avatar}}" class="img-responsive" alt="avatar">
                                    </a>

                                    <h1 id="logo" class="logo header-logo header-title header-module ease" style="font-size: 80px;">
                                          <a href="#" class="header-logo-anchor">
                                                <span class="logo-anchor-text">{{'@' . \Auth::user()->username}}</span>
                                          </a>
                                    </h1>

                                    <div class="find-me-on-wrapper find-me-on-header header-module">
                                          <center>{{\Auth::user()->name}}</center>
                                          <br>
                                          <br>
                                    </div>
                              </header>
                        </section>
                  </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                  <div class="row">
                        @foreach($nearbyImages->data as $image)
                              <div class="col-md-3">
                                    <div class="panel panel-default">
                                          <img src="{{$image->images->standard_resolution->url}}" width="100%">
                                          {{-- <div class="col-md-3"> --}}
                                                {{-- <img src="{{$image->user->profile_picture}}" width="100%"> --}}
                                          {{-- </div> --}}
                                          {{-- <div class="col-md-9"> --}}
                                                <a href="https://instagram.com/{{$image->user->username}}">{{'@' . $image->user->username}}</a>
                                          {{-- </div> --}}
                                    </div>
                              </div>
                        @endforeach
                  </div>
            </div>

      </div>
</div>
@endsection
