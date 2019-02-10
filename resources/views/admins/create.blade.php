
@extends('layouts.app')
@section('content')

<div class="authentication">
    <div class="card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header slideDown">
                        <h1>SEO Kenya</h1>
                        <ul class="list-unstyled l-social">
                            <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                        {!! Form::open(['action'=>'adminupdatesController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                               <div class="form-control-file">
                                    {!! Form::file('mycoverimage' )!!}
                               </div>
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                                {!! Form::hidden('_method','PUT') !!}
                        {!! Form::close() !!}

            </div>

        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

@endsection
