@extends('layout')
@section('content')




<div class="col">
<h1 class="text-center">Event: {{$event->event_name}}</h1>
<div class="row">
    <div class="col-7">
        <h3>Where: {{$event->location}}</h3>
        <h3>Starts: {{$event->start_date}}</h3>
        <h3>Ends: {{$event->end_date}}</h3>
        {{-- <h5>Posted {{$event->created_at}} by {{$event->posted_by}}</h5> --}}
        <p>{{$event->description}}</p>
    </div>
    <div class="col-5 bg-light border pt-3 pb-3">
        <img src="{{asset("map.png")}}" alt="Image Container" class="" style="width:100%">
    </div>

               @if($count == 0)

           <a class="btn btn-sm btn-outline-secondary" href="/events/attending/{{$event->event_id}}">Attending</a>

           @else

           <a class="btn btn-sm btn-outline-secondary" href="/events/unattending/{{$event->event_id}}">No longer Attending</a>

           @endif
    
</div>
<br/>
</div>

@endsection