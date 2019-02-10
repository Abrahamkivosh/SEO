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


</div>  --}}<section class="content home">
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
                    <a href="dashboard.">
                      <i class="zmdi zmdi-home"></i> SEO Kenya</a>
                  </li>
                  <li class="breadcrumb-item active">Admin</li>
                </ul>
              </div>
            </div>
          </div>


          <div class="container-fluid">



          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                  <div class="header">
                  <p>
                  <p>
                    <h2>Active SEO Clients</h2>
                    <p>
                    <p>
                    <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu float-right">
                          <li>
                            <a href="javascript:void(0);">Action</a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">Another action</a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">Something else here</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>NAME</th>
                            <th>Website</th>
                            <th>STATUS</th>
                            <th>View Project</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th>MONTHLY SUBSCRIPTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              <span>Ipsum is simply</span>
                            </td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-success">DOING</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Nov 11, 2017</td>
                            <td>Dec 11, 2017</td>
                            <td>
                              <span class="text-success">$100</span>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Lorem Ipsum is</td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-info">TO DO</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Nov 18, 2017</td>
                            <td>Dec 18, 2017</td>
                            <td>
                              <span class="text-info">$321</span>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Ipsum is simply</td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-danger">SUSPENDED</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Nov 22, 2017</td>
                            <td>Dec 22, 2017</td>
                            <td>
                              <span class="text-danger">-$204</span>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Hosting press html</td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-warning">WAIT APPROVEL</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Nov 29, 2017</td>
                            <td>Dec 29, 2017</td>
                            <td>
                              <span class="text-success">$11</span>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Lorem is simply</td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-success">DOING</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Dec 1, 2017</td>
                            <td>Jan 1, 2017</td>
                            <td>
                              <span class="text-success">$11</span>
                            </td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Lorem Ipsum simply</td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-success">DOING</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Dec 3, 2017</td>
                            <td>Jan 3, 2017</td>
                            <td>
                              <span class="text-danger">-$11</span>
                            </td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Ipsum is simply</td>
                            <td><a href="#">
                              <span class="text text-link">tbxhost.co.uk</span></a>
                            </td>
                            <td>
                              <span class="label label-warning">WAIT APPROVEL</span>
                            </td>
                      <td>
                      <div class="col-lg-12"><div class="pull-center">
                          <a href="#" class="btn btn-raised btn-primary waves-effect">View Project</a></div>
                      </div>
                      </td>
                            <td>Dec 3, 2017</td>
                            <td>Jan 3, 2017</td>
                            <td>
                              <span class="text-success">$54</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row sales-report">
                      <div class="col-6">
                        <h5 class="m-b-0">Jan 2017</h5>
                        <p class="m-b-0">Sales Report</p>
                      </div>
                      <div class="col-6">
                        <h3 class="text-right text-success m-t-0 m-b-0">$4,231</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
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
