@extends('layout')
@section('content')




          <div class="blog-post">
            <h2 class="blog-post-title">Galleries</h2>
{{--             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}
				

			 <table>

			 	<tr>
			 		<td>Your Photo Galleries</td>
			 	</tr>

            <div class="text-center mb-3">
        {!! Form::open(array('route' => 'gallery.upload','method'=>'GET','files'=>'false')) !!}
            {!! Form::submit('Upload a Photo Gallery',['class'=>'btn btn-outline-primary']) !!}
        {!! Form::close() !!}
          </div>

			  @foreach($galleries as $gallery)
                      <tr>
                        <td>
                        	{{$gallery->title}} 
                        </td>
                      </tr>
                        <tr>
                        <td>


                          <img 

                          {{-- src="{{ asset('database/users/'.$gallery->gallery_by.'/galleries/'.$gallery->gallery_id.'/1.PNG') }}" --}}
                          src="{{asset("database/galleries/".$gallery->gallery_id."/1.PNG")}}" alt="Card image cap" width="256" height="256">
                        </td>

                      </tr>

              @endforeach
              	
              	
              </table>	





          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

@endsection