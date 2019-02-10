@extends('layouts.app')
@section('content')
<div class=" container">
        <div class="btn btn-default">
            <a href="/post">Back</a>
        </div>
            <h1>Create New Clients</h1>
            {!! Form::open(['action'=>'PostsController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">

                    {!! Form::label('first_name', 'First Name') !!}
                    {!! Form::text('first_name', '', ['placeholder'=>'Title','class'=>'form-control']) !!}

                    {!! Form::label('last_name', 'Last Name') !!}
                    {!! Form::text('first_name', '', ['placeholder'=>'Title','class'=>'form-control']) !!}

                    {!! Form::label('email', 'Email') !!}

                    {!! Form::email('email', '', ['placeholder'=>'Enter your email','class'=>'form-control']) !!}


                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', '', ['placeholder'=>'Client Number','class'=>'form-control']) !!}

                    <div class=" form-group">
                    {!! Form::file('coverimage' )!!}
                    </div>



                    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}


                </div>

            {!! Form::close() !!}



        </div>


</div>



@endsection
