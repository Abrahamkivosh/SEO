
@extends('layouts.app')
@section('content')

@if (count($admins) > 0)
<ul class=" list-group">
    @foreach ($admins as $admin )
    <li class=" list-group-item">
    <div class="well">

            <div class=" col-4 col-md-4 col-sm-4">
                    <img  style="width: 100%;" src="/storage/cover_images/{{ $admin->coverimage }}">

            </div>
            <div class=" col-8 col-md-8 col-sm-8">
                        <div>
                            <h1> <a href="/profile/{{ $admin -> id }}">   {{ $admin -> name }} </h1></a>
                            <div>
                              <h3>{{ $admin -> email }}</h3>
                              <small>Created on {{ $admin -> created_at }} </small>

                        </div>

                    </div>
            </div>
    </div>
    </li>

    @endforeach
</ul>
{{ $admins ->links() }}


@else
<div class="btn btn-danger">
    NO POST FOUND
</div>

@endif










<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

@endsection
