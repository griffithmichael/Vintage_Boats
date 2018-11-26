@extends('layout')
@section('content')




          <div class="blog-post">
            <h2 class="blog-post-title">For Sale</h2>
{{--             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}
        

              

           {{$classified->title }}
           {{$classified->description }}
           {{$classified->cost }}





          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

@endsection