@extends('layout')

@section('content')
<div class="col mb-2">
    <h1 class="text-center bg-light py-1 border-top border-bottom">Welcome, {{$user->first_name}}</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="row">
        <div class="col-8">
            <h3 class="font-italic ml-4">Personal Info</h3>
            <div class="row ml-2 mt-2">
                <div class="col-4">
                    <p class="text-right"><strong>Name:</strong></p>
                    <p class="text-right"><strong>Email Address:</strong></p>
                    <p class="text-right"><strong>Phone Number:</strong></p>
                    <p class="text-right"><strong>Postal Code:</strong></p>
                    {{-- <p><strong>Mailing Address:</strong></p> --}}
                </div>
                <div class="col-4">
                    <p>{{$user->first_name . ' ' . $user->last_name}}</p>
                    <p>{{$user->email}}</p>
                    <p>{{$user->phone}}</p>
                    <p>{{$user->postalcode}}</p>
                </div>
            </div>
            <div class="col-8 text-center mb-3">
                <a href="#"><div class="btn btn-secondary">Edit Personal Info</div></a>
            </div>
            {{-- ------------------------------ --}}
            <hr/>
            {{-- ------------------------------ --}}
            <h3 class="font-italic ml-4">Change Password</h3>
            {!! Form::open(array('route' => 'home','method'=>'GET','files'=>'true')) !!}
            <div class="row ml-2 mt-2">
                <div class="col-4">
                    <div class="text-right my-2"><strong>{!! Form::label('old_password','Old Password:') !!}</strong></div>
                    <div class="text-right my-2"><strong>{!! Form::label('new_password','New Password:') !!}</strong></div>
                    <div class="text-right my-2"><strong>{!! Form::label('confirm_password','Confirm Password:') !!}</strong></div>
                </div>
                <div class="col-4">
                    <div class="my-2">{!! Form::Password('old_password', null, ['class' => 'form-control']) !!}</div>
                    <div class="my-2">{!! Form::Password('new_password', null, ['class' => 'form-control']) !!}</div>
                    <div class="my-2">{!! Form::Password('confirm_password', null, ['class' => 'form-control']) !!}</div>
                </div>
            </div>
            <div class="col-8 text-center mb-3">
                {!! Form::submit('Change Password',['class'=>'btn btn-secondary']) !!}
            </div>
            {!! Form::close() !!}
            {{-- ------------------------------ --}}
            <hr/>
            {{-- ------------------------------ --}}
            <h3 class="font-italic ml-4">Membership</h3>
            <div class="col-8 ml-4 mt-2">
                <p>Your membership expires in {{ \Carbon\Carbon::parse($membership->expiration_date)->diffForHumans()}} ({{ $length }} days)</p>
                <p>You must renew by {{$membership->expiration_date}}</p>
            </div>
            <div class="col-8 text-center mb-3">
                <a href="#"><div class="btn btn-secondary">Renew Membership</div></a>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col"></div>
                <div class="col-10 border bg-light border-dark text-center">
                    <h3 class="font-italic mt-2">Manage...</h3>
                    <a href="#"><div class="btn btn-lg btn-secondary btn-block my-4">My Boats</div></a>
                    <a href="#"><div class="btn btn-lg btn-secondary btn-block my-4">My Registered Events</div></a>
                    <a href="#"><div class="btn btn-lg btn-secondary btn-block my-4">My Galleries</div></a>
                    <a href="#"><div class="btn btn-lg btn-secondary btn-block my-4">My Classifieds</div></a>
                </div>
                <div class="col"></div>
            </div>
            <div class="row"></div>
        </div>
    </div>
</div>
@endsection
