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
{{--                         	{{$gallery->title}} 
 --}}                        	{{$gallery['title']}} 
                        </td>
                        
                        <td>
{{--                         	<img src="storage/app/database/users/{{$gallery->gallery_by}}/galleries/{{$gallery->gallery_id}}/1.PNG" alt="User Pictures"> --}}
                        </td>

                      </tr>

              @endforeach
              	
              	
              </table>	





          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

@endsection