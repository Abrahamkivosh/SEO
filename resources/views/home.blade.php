{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

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
<!-- Main Content -->
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
              <a href="home">
                <i class="zmdi zmdi-home"></i> SEO Kenya</a>
            </li>
            <li class="breadcrumb-item active">Admin</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="card widget_2">
        <ul class="row clearfix list-unstyled m-b-0">
          <li class="col-lg-3 col-md-6 col-sm-12">
            <div class="body">
              <div class="row">
                <div class="col-7">
                  <h5 class="m-t-0">Registered Clients</h5>
                  <small class="text-small">4% higher than last month</small>
                </div>
                <div class="col-5 text-right">
                  <h2 class="">20</h2>
                  <small class="info">of 1Tb</small>
                </div>
                <div class="col-12">
                  <div class="progress m-t-20">
                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-lg-3 col-md-6 col-sm-12">
            <div class="body">
              <div class="row">
                <div class="col-7">
                  <h5 class="m-t-0">Ongoing Projects</h5>
                  <small class="text-small">6% higher than last month</small>
                </div>
                <div class="col-5 text-right">
                  <h2 class="">12%</h2>
                  <small class="info">of 1Tb</small>
                </div>
                <div class="col-12">
                  <div class="progress m-t-20">
                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-lg-3 col-md-6 col-sm-12">
            <div class="body">
              <div class="row">
                <div class="col-7">
                  <h5 class="m-t-0">Pending Projects</h5>
                  <small class="text-small">6% higher than last month</small>
                </div>
                <div class="col-5 text-right">
                  <h2 class="">39</h2>
                  <small class="info">of 100</small>
                </div>
                <div class="col-12">
                  <div class="progress m-t-20">
                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-lg-3 col-md-6 col-sm-12">
            <div class="body">
              <div class="row">
                <div class="col-7">
                  <h5 class="m-t-0">Completed Projects</h5>
                  <small class="text-small">6% higher than last month</small>
                </div>
                <div class="col-5 text-right">
                  <h2 class="">8</h2>
                  <small class="info">of 10</small>
                </div>
                <div class="col-12">
                  <div class="progress m-t-20">
                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

	  <h4>Project On Progress</h4>
	  <p>
	  <p>

      <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
          <div class="card member-card">
            <div class="header l-blue">
              <h4 class="m-t-10">Matthew Deo</h4>
            </div>
            <div class="member-img">
              <a href="profile" class="">
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
              <a href="profile" class="">
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
              <a href="profile" class="">
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

	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="header">
              <h2>Featured Clients</h2>
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
@stop

@section('aside-right')
@include('include.aside-right')
@stop

