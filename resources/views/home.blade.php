@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome back {{$user->first_name . ' ' . $user->last_name}} <br/>

                    Your  member ship expires {{ \Carbon\Carbon::parse($membership->expiration_date)->diffForHumans()}}  
                    [{{ $length }} days ] 
                    be sure to renew by {{$membership->expiration_date}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
