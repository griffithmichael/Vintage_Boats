@extends('layouts.dashboard')
@section('page_heading', 'VBA Users')
@section('section')
    

<div class="col">

    <div class="row">

        <div class="col">



        @foreach ($users as $user)
            <div class="card flex-md-row mb-4 shadow-sm h-md-200">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">ID: {{$user->id}}</strong>
                    <h3 class="mb-0">
                        <p>{{$user->first_name . ' ' . $user->last_name}}</p>
                    </h3>


                    <p class="card-text mb-auto">{{$user->email}}</p>
                    <p class="card-text mb-auto">{{$user->postalcode}}</p>
                    <p class="card-text mb-auto">{{$user->phone}}</p>



                    @if(Auth::user()->is_admin and Auth::user()->id != $user->id)
                    <a class="btn btn-sm btn-outline-secondary" onclick="return confirm('Are you sure you wish to permanently delete this user?')"
                    href="/admin/users/delete/{{$user->id}}">Delete User</a>
                    @endif

                    <a class="btn btn-sm btn-outline-secondary" 
                    href="/admin/mail/{{$user->id}}">Create Mailer</a>



                </div>


            </div>
        @endforeach

        </div>


    </div>

</div>

@endsection