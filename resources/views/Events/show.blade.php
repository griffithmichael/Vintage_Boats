@extends('layout')
@section('content')

          <div class="blog-post">
            <h2 class="blog-post-title">Event Details</h2>
{{--             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}
        

              

           Event Name: {{$event->event_name}} <br/>
           Event Location: {{$event->location}} <br/>
           Event Description: {{$event->description}} <br/>

           Event Start Date: {{$event->start_date}} <br/>
           Event End Date: {{$event->end_date}} <br/>


           @if($count == 0)

           <a class="btn btn-sm btn-outline-secondary" href="/events/attending/{{$event->event_id}}">Attending</a>

           @else

           <a class="btn btn-sm btn-outline-secondary" href="/events/unattending/{{$event->event_id}}">No longer Attending</a>

           @endif

          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->


<div class="col">
<h1 class="text-center">{{$event->event_name}}</h1>
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
    
</div>
<br/>
</div>

@endsection