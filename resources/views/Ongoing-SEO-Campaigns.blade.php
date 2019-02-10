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

{{--  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


</div>  --}}

@section('nav')
@include('include.navbar')
@endsection
@section('aside-left')
@include('include.aside-left')
@endsection
@section('content')
<section class="content home">
        <div class="block-header">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>SEO Kenya
                <small class="text-muted">Welcome to the management dashboard</small>
              </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
              <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item">
                  <a href="dashboard.html">
                    <i class="zmdi zmdi-home"></i> SEO Kenya</a>
                </li>
                <li class="breadcrumb-item active">Admin</li>
              </ul>
            </div>
          </div>
        </div>


        <div class="container-fluid">

          <p>
          <p>
          <h4>ASSIGNED PROJECTS</h4>
          <p>
          <p>

          <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
              <div class="card member-card">
                <div class="header l-blue">
                  <h4 class="m-t-10">Matthew Deo</h4>
                </div>
                <div class="member-img">
                  <a href="profile.html" class="">
                    <img src="assets/images/lg/avatar3.jpg" class="rounded-circle" alt="profile-image">
                  </a>
                </div>
                <div class="body">
                  <div class="col-12">
                    <ul class="social-links list-unstyled">
                      <li>
                        <a title="facebook" href="#">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a title="twitter" href="#">
                          <i class="zmdi zmdi-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a title="instagram" href="3">
                          <i class="zmdi zmdi-instagram"></i>
                        </a>
                      </li>
                    </ul>
                    <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-4">
                      <h5>12</h5>
                      <small>Submitted Pages</small>
                    </div>
                    <div class="col-4">
                      <h5>24,6$</h5>
                      <small>Subscription</small>
                    </div>
                  </div>
                  <p>
                  <p>

                  <div class="col-lg-12"><div class="pull-left">
                        <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                    </div>
                   <p>
                    <div class="col-lg-12"><div class="pull-right">
                        <a href="#" class="btn btn-raised btn-primary waves-effect">Visit Website</a></div>
                    </div>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card member-card">
                <div class="header l-parpl">
                  <h4 class="m-t-10">Eliana Smith</h4>
                </div>
                <div class="member-img">
                  <a href="profile.html" class="">
                    <img src="assets/images/lg/avatar2.jpg" class="rounded-circle" alt="profile-image">
                  </a>
                </div>
                <div class="body">
                  <div class="col-12">
                    <ul class="social-links list-unstyled">
                      <li>
                        <a title="facebook" href="#">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a title="twitter" href="#">
                          <i class="zmdi zmdi-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a title="instagram" href="3">
                          <i class="zmdi zmdi-instagram"></i>
                        </a>
                      </li>
                    </ul>
                    <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-4">
                      <h5>12</h5>
                      <small>Submitted Pages</small>
                    </div>
                    <div class="col-4">
                      <h5>24,6$</h5>
                      <small>Subscription</small>
                    </div>
                  </div>

                 <p>
                 <p>
                  <div class="col-lg-12"><div class="pull-left">
                        <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                    </div>
                    <p>
                    <p>
                    <div class="col-lg-12"><div class="pull-right">
                        <a href="#" class="btn btn-raised btn-primary waves-effect">Visit Website</a></div>
                    </div>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="card member-card">
                <div class="header l-slategray">
                  <h4 class="m-t-10">Michael Dorsey</h4>
                </div>
                <div class="member-img">
                  <a href="profile.html" class="">
                    <img src="assets/images/lg/avatar1.jpg" class="rounded-circle" alt="profile-image">
                  </a>
                </div>
                <div class="body">
                  <div class="col-12">
                    <ul class="social-links list-unstyled">
                      <li>
                        <a title="facebook" href="#">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a title="twitter" href="#">
                          <i class="zmdi zmdi-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a title="instagram" href="3">
                          <i class="zmdi zmdi-instagram"></i>
                        </a>
                      </li>
                    </ul>
                    <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-4">
                      <h5>12</h5>
                      <small>Submitted Pages</small>
                    </div>
                    <div class="col-4">
                      <h5>24,6$</h5>
                      <small>Subscription</small>
                    </div>
                  </div>

                  <p>
                  <p>
                  <div class="col-lg-12"><div class="pull-left">
                        <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                    </div>
                    <p>
                    <p>
                    <div class="col-lg-12"><div class="pull-right">
                        <a href="#" class="btn btn-raised btn-primary waves-effect">Visit Website</a></div>
                    </div>

                </div>
              </div>
            </div>
          </div>


        </div>
    </section>


@stop

@section('aside-right')
@include('include.aside-right')
@stop
