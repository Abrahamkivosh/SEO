@extends('layouts.app')

@section('requirements')
<!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <p>Please wait...</p>
            <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- Search  -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Explore SEO Kenya...">
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div>
@stop
@section('content')
<div class="authentication">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header slideDown">
                            <div class="logo"><img src="assets/images/logo.png" alt="Nexa"></div>
                            <h1>Nexa Admin</h1>
                            <ul class="list-unstyled l-social">
                                <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <form class="col-lg-12" id="sign_in" method="POST">
                        <h5 class="title">The General Shutdown</h5>
                        <small class="msg">Maintanance or not?</small>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">Search...</label>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-12">
                        <a href="index.html" class="btn btn-raised btn-primary waves-effect">Go to Homepage</a>
                    </div>
                    <div class="col-lg-12 m-t-20">
                        <a href="sign-in.html" title="">Sign In!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
