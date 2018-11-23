@extends('layout')
@section('content')




          <div class="blog-post">
            <h2 class="blog-post-title">Upload to Your Gallery</h2>


            <form action="{{route('gallery.upload')}}" method="post" enctype="multipart/form-data">
            	{{csrf_field() }}

              {!! Form::label('location','Title:') !!}

              <input type="text" name="title"> <br/>

            	<input type="file" name="images[]" multiple="true"> <br/>

            	<input type="submit">
            	
            </form>


          </div><!-- /.blog-post -->
            	



@endsection