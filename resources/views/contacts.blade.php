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
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
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

<section class="content contact">
    <div class="container-fluid">
        <div class="card">
            <div class="row bg-white">
                <div class="col-lg-1 col-md-1 col-3">
                    <div class="checkbox m-l-15 m-t-20">
                        <label>
                            <input name="optionsCheckboxes" type="checkbox">
                            <span class="checkbox-material">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 hidden-sm-down">
                    <div class="input-group m-t-10">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-9 text-right">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default waves-effect col-cyan">
                            <i class="zmdi zmdi-plus-circle"></i>
                        </button>
                        <button type="button" class="btn btn-default waves-effect col-green">
                            <i class="zmdi zmdi-archive"></i>
                        </button>
                        <button type="button" class="btn btn-default waves-effect col-amber">
                            <i class="zmdi zmdi-star"></i>
                        </button>
                        <button type="button" class="btn btn-default waves-effect col-red">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                    </div>
                    <div class="btn-group hidden-sm-down" role="group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="zmdi zmdi-label"></i>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:void(0);">Family</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Work</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Google</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="javascript:void(0);">Create a Label</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled">
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star-outline"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">John Smith <span class="badge badge-warning bg-blue hidden-sm-down">Family</span></h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-625-6598</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> johnsmith@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star col-amber"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">Hossein Shams <span class="badge badge-warning bg-green hidden-sm-down">Work</span></h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-625-1597</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> hosseinshams@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star col-amber"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar4.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">Maryam Amiri</h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-264-3591</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> maryamamiri@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star-outline"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar5.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">Tim Hank <span class="badge badge-warning bg-green hidden-sm-down">Work</span></h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-852-7539</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> timhank@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star-outline"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar6.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">Fidel Tonn</h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-459-6437</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> fideltonn@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>514 S. Magnolia St. Orlando, FL 32806</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star col-amber"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar7.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">Gary Camara <span class="badge badge-warning bg-blue hidden-sm-down">Family</span></h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-854-9653</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> garycamara@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star-outline"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">Frank Camly <span class="badge badge-warning bg-green hidden-sm-down">Work</span></h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-625-2648</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> frankcamly@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>4 Goldfield Rd. Honolulu, HI 96815</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
            <li class="c_list">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-10">
                        <div class="control">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox">
                                    <span class="checkbox-material">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <a href="javascript:;" class="favourite text-muted" data-toggle="active">
                                <i class="zmdi zmdi-star-outline"></i>
                            </a>
                        </div>
                        <div class="avatar">
                            <img src="assets/images/xs/avatar8.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="u_name">
                            <h5 class="c_name">John Smith</h5>
                            <h6 class="phone"><i class="zmdi zmdi-phone"></i><span>264-625-1973</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 hidden-sm-down">
                        <span class="email"><a href="" title=""><i class="zmdi zmdi-email"></i> johnsmith@gmail.com</a></span>
                        <address><i class="zmdi zmdi-pin"></i>71 Pilgrim Avenue Chevy Chase, MD 20815</address>
                    </div>
                    <div class="col-lg-2 col-md-1 col-2">
                        <ul class="header-dropdown list-unstyled">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="action_btn">
                    <a href="javascript:void(0);" class="btn btn-default col-green"><i class="zmdi zmdi-edit"></i></a>
                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                </div>
            </li>
        </ul>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
    </div>
</section>


@section('nav')
@include('include.navbar')
@endsection
@section('aside-left')
@include('include.aside-left')
@endsection
@section('content')
<!-- Main Content -->
@stop

@section('aside-right')
@include('include.aside-right')
@stop
