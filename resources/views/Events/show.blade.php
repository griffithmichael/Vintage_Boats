@extends('layout')
@section('content')




          <div class="blog-post">
            <h2 class="blog-post-title">Event Details</h2>
{{--             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}
        

              

           Event Name: {{$event->event_name}} <br/>
           Event Location: {{$event->location}} <br/>
           Event Description: {{$event->description}} <br/>

           Event Start Date: {{$event->start_date}} <br/>
           Event End Date: {{$event->end_date}}





          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

@endsection