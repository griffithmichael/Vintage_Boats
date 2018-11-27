@extends('layout')

@section('content')
    

<div class="col">

    <div class="text-center p-3">
        <h1>VBA Users</h1>
    </div>



    <div class="row">

        <div class="col">



{{--         @foreach ($users as $user)

            <table>
                <tr>
                    <td>
                        User ID:
                    </td>
                    <td>
                        {{$user->id}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        {{$user->first_name . ' ' . $user->last_name}}
                    </td>
                </tr>
                 <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Postal Code:
                    </td>
                    <td>
                        {{$user->postalcode}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                        {{$user->phone}}
                    </td>
                </tr>
            </table>
            
        @endforeach --}}

        @foreach ($users as $user)
            <div class="card flex-md-row mb-4 shadow-sm h-md-200">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">ID: {{$user->id}}</strong>
                    <h3 class="mb-0">
                        <p>{{$user->first_name . ' ' . $user->last_name}}</p>
                    </h3>

{{--                     <div class="mb-1 text-muted">Posted on {{$classified->created_at}} by 
                        {{$user = App\User::find($classified->posted_by)->first_name}}
                        {{$user = App\User::find($classified->posted_by)->last_name}}
                    </div> --}}

{{--                     {{$classified->user()}}
 --}}
                    <p class="card-text mb-auto">{{$user->email}}</p>
                    <p class="card-text mb-auto">{{$user->postalcode}}</p>
                    <p class="card-text mb-auto">{{$user->phone}}</p>
                    {{-- <a href="#">Continue reading</a> --}}

{{--                     @if(Auth::user()->id == $classified->posted_by)
                    <a class="btn btn-sm btn-outline-secondary" 
                    href="/classifieds/delete/{{$classified->classified_id}}">Delete Posting</a> --}}

                    @if(Auth::user()->is_admin and Auth::user()->id != $user->id)
                    <a class="btn btn-sm btn-outline-secondary" 
                    href="/admin/users/delete/{{$user->id}}">Delete User</a>
                    @endif

                    <a class="btn btn-sm btn-outline-secondary" 
                    href="/admin/mail/{{$user->id}}">Create Mailer</a>



                </div>
               {{--  <img class="card-img-right flex-auto d-none d-lg-block p-3" style="max-height:200px" 
                src="{{asset("database/classified/".$classified->classified_id."/1.PNG")}}" alt="Card image cap"> --}}
            </div>
        @endforeach

        </div>


    </div>

</div>

@endsection