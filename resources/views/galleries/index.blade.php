@extends('layout')
@section('content')




          <div class="blog-post">
            <h2 class="blog-post-title">Galleries</h2>
{{--             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}
				

			 <table>

			 	<tr>
			 		<td>Your Photo Galleries</td>
			 	</tr>

			  @foreach($galleries as $gallery)
                      <tr>
                        <td>
                        	{{$gallery->title}} 
                        </td>
                      </tr>
                        <tr>
                        <td>


                          <img src="{{ asset('database/users/'.$gallery->gallery_by.'/galleries/'.$gallery->gallery_id.'/1.PNG') }}" width="256" height="256">
                        </td>

                      </tr>

              @endforeach
              	
              	
              </table>	





          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

@endsection