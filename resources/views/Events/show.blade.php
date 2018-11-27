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

@endsection