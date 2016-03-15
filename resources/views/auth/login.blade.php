@extends('layouts.app')

@section('content')


<style type="text/css">

#mainContainer{
    margin-top:40px;
}

.find-me-on li a {
 color:#39bbdb !important;
}
a:hover{
    text-decoration:none;
}

/* -- Gutter between header elements -- */
.header-module {
  margin: 30px auto;
}
.header-module:first-child {
  margin-top: 60px;
}
.header-module:last-child {
  margin-bottom: 60px;
}
.header-module.header-image-wrapper {
  margin: -1px auto 0 auto;
}
.header-module.find-me-on-header {
  margin: 40px auto;
}
.has-banner.has-avatar .header-module.blogger-avatar {
  margin-top: -60px;
}
.has-nav .header-module:last-child {
  margin-bottom: -20px;
}
.has-nav .header-module.find-me-on-header {
  margin-bottom: -24px;
}
.minimal-header .header-module.header-logo {
  margin: 80px auto;
}
.has-nav .minimal-header .header-module.header-logo {
  margin-top: 80px;
  margin-bottom: 60px;
}

.header-image-wrapper {
  position: relative;
  overflow: hidden;
}

.header-image {
  display: block;
  width: 100%;
  height: 100%;
  position: relative;
  opacity: 0;
  -webkit-transition: opacity 150ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
  transition: opacity 150ms cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
.header-image.loaded {
  opacity: 1;
}
.header-image.cover {
  -webkit-background-size: cover;
  background-size: cover;
}
.header-image img {
  display: block;
  width: 100%;
  height: auto;
}

.blog-header .blogger-avatar {
  display: block;
  width: 120px;
  height: 120px;
  border: none;
  border-radius: 3px;
  overflow: hidden;
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.avatar-style-circle .blog-header .blogger-avatar {
  border-radius: 50%;
}
.blog-header .blogger-avatar:active {
  -webkit-transform: translate3d(0, 2px, 0);
  transform: translate3d(0, 2px, 0);
}

.header-logo {
  font-size: 72px;
  font-weight: 600;
  line-height: 1;
  text-align: center;
}

.header-logo-anchor {
  display: inline-block;
  max-width: 70%;
  margin: 0 auto;
  line-height: inherit;
  vertical-align: top;
}

.logo-anchor-text,
.logo-anchor-image-wrapper,
.logo-anchor-img {
  display: block;
}

.logo-anchor-image-wrapper {
  padding-top: 10px;
}

.header-description {
  width: 70%;
  max-width: 640px;
  font-size: 16px;
  line-height: 1.4;
  text-align: center;
  color: #666;
}

.find-me-on-header {
  width: 50%;
  max-width: 640px;
}
.find-me-on-header .find-me-on {
  margin-left: 0;
  text-align: center;
}

.page,
.page-wrapper,
.container::after {
  background-color: #39bbdb;
}

.show-aside-overlay .page::after {
  background-color: rgba(56, 57, 77, 0.5);
}

/* -- Avatar -- */
.blog-header .blogger-avatar {
  -webkit-box-shadow: 0 0 0 6px #fff;
  box-shadow: 0 0 0 6px #fff;
}

/* -- Logo -- */
.header-logo-anchor:link, .header-logo-anchor:visited {
  color: #39bbdb;
}
.header-logo-anchor:hover, .header-logo-anchor:focus {
  color: #39bbdb;
}

/* -- Description -- */
.header-description {
  color: rgba(102, 102, 112, 0.7);
}

</style>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">







            <div class="panel panel-default">
                {{-- <div class="panel-body"> --}}


<figure id="header-banner" class="header-image-wrapper header-module">
                <a href="#" class="header-image cover loaded imgLiquid_bgSize imgLiquid_ready">
                    <img src="https://source.unsplash.com/750x190" alt="banner">
                </a><!-- /.header-image -->
            </figure><!-- /.header-image-wrapper -->


    <section class="panel-body content has-banner has-avatar avatar-style-circle has-title has-description has-nav">
        <!-- HEADER begins -->
        <header id="header" class="blog-header" role="banner">


            <a href="#" id="header-avatar" class="blogger-avatar header-module ease">
                <img src="http://bootdey.com/img/Content/user-453533-fdadfd.png" class="img-responsive" alt="avatar">
            </a><!-- /.blogger-avatar -->

            <h1 id="logo" class="logo header-logo header-title header-module ease" style="font-size: 80px;">
                <a href="#" class="header-logo-anchor">
                    <span class="logo-anchor-text">Interaction</span>
                </a><!-- /.header-logo-anchor -->
            </h1><!-- /.header-logo -->

                <div class="find-me-on-wrapper find-me-on-header header-module">
                <a class="btn btn-block btn-social btn-instagram" href="{{route('oauth', 'instagram')}}">
                        <span class="fa fa-instagram"></span> Sign in with Instagram
                    </a>
                <br>
                <br>
            </div><!-- /.find-me-on-header -->
        </header><!-- /.blog-header -->
        <!-- HEADER ends -->
    </section>





                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
