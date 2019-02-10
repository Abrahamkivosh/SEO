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

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


</div>

@section('nav')
@include('include.navbar')
@endsection
@section('aside-left')
@include('include.aside-left')
@endsection
@section('content')
@section('include.user-info')
@endsection

<!-- Main Content -->
<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <h2>TL Groups</h2>
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="#">Alexander</a>
                        <span class="datetime">6:12</span>
                        <span class="message">Hello, {{Auth()->user()->name}} </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, {{Auth()->user()->name}}<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of services available in our portfolio</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>

            </ul>
            </div>
            <div class="input-group">
                <div class="form-line">
                    <input type="text" class="form-control date" placeholder="Enter your email...">
                </div>
                <span class="input-group-addon"> <i class="material-icons">send</i> </span>
            </div>
        </div>
    </div>
</div>

<section class="content profile-page">
    <section class="boxs-simple">
        <div class="profile-header">
            <div class="profile_info row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="profile-image float-md-right"> <img src="assets/images/profile_av.jpg" alt=""> </div>
                </div>
                <div class="col-lg-6 col-md-8 col-12">
                    <h4 class="m-t-5 m-b-0"><strong>{{Auth()->user()->name}}</strong></h4>
                    <span class="job_post">Adminstrator at SEO Kenya</span>
                    <p>I love to do my best whenever I step in.</p>
                    <div class="m-t-10">
                      <a href="/profile/create">  <button class=" btn- btn-default"> Change Profile Picture</button></a>
                        <button class=" btn- btn-default"></button>
                    </div>

                    <p class="social-icon m-t-20 m-b-0">
                        <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                        <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                        <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                        <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                        <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="profile-sub-header">
            <div class="box-list">
                <ul class="text-center">
                    <li><a href="post" class=""><i class="zmdi zmdi-email"></i><p>My Inbox</p></a></li>

                    <li><a href="events"><i class="zmdi zmdi-format-subject"></i><p>Events</p></a></li>
                </ul>
            </div>
        </div>
    </section>


    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>About Me</h2>
                    </div>
                    <div class="body">
                        <p class="text-default">My name {{Auth()->user()->name}}<br />
                        </p>
                        <blockquote>
                            <p>My name {{Auth()->user()->name}}</p>
                            <small>Designer <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="header">
                        <h2>My Portfolio Status</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled">
                            <li>
                                <div>Behance</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue progress-bar-striped active" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"> <span class="sr-only">62% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Themeforest</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green progress-bar-striped active" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"> <span class="sr-only">87% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Dribbble</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber progress-bar-striped active" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> <span class="sr-only">32% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Pinterest</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush progress-bar-striped active" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix social-widget">
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect facebook-widget">
                            <div class="icon"><i class="zmdi zmdi-facebook"></i></div>
                            <div class="content">
                                <div class="text">Like</div>
                                <div class="number">123</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect instagram-widget">
                            <div class="icon"><i class="zmdi zmdi-instagram"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">231</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect twitter-widget">
                            <div class="icon"><i class="zmdi zmdi-twitter"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">31</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect google-widget">
                            <div class="icon"><i class="zmdi zmdi-google"></i></div>
                            <div class="content">
                                <div class="text">Like</div>
                                <div class="number">254</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect linkedin-widget">
                            <div class="icon"><i class="zmdi zmdi-linkedin"></i></div>
                            <div class="content">
                                <div class="text">Followers</div>
                                <div class="number">2510</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6">
                        <div class="card info-box-2 hover-zoom-effect behance-widget">
                            <div class="icon"><i class="zmdi zmdi-behance"></i></div>
                            <div class="content">
                                <div class="text">Project</div>
                                <div class="number">121</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">My Post</a></li>
                            {{--  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Timeline</a></li>  --}}
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Setting</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="mypost">
                                <div class="mypost-form">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                    <div class="post-toolbar-b">
                                        <a href="javascript:void(0);" class="btn btn-raised btn-default"><i class="zmdi zmdi-attachment"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-raised btn-default"><i class="zmdi zmdi-camera"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-raised btn-success">Post</a>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">

                            </div>
                            <div role="tabpanel" class="tab-pane" id="usersettings">
                                <h2 class="card-inside-title">Security Settings</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control" placeholder="New Password">
                                            </div>
                                        </div>
                                        <button class="btn btn-raised btn-primary">Save Changes</button>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">Account Settings</h2>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-t-20">
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                <span class="checkbox-material"><span class="check"></span></span> Profile Visibility For Everyone </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" checked="" type="checkbox">
                                                <span class="checkbox-material"><span class="check"></span></span> New task notifications </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                <span class="checkbox-material"><span class="check"></span></span> New friend request notifications </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-t-20">
                                        <button class="btn btn-raised btn-primary ">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob Plugin Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
<script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>

@stop

@section('aside-right')
@include('include.aside-right')
@stop
