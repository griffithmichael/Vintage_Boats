@extends('layout')
@section('content')




          <div class="blog-post">
            <h2 class="blog-post-title">Galleries</h2>
{{--             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p> --}}


            <div class="text-center mb-3">
        {!! Form::open(array('route' => 'gallery.upload','method'=>'GET','files'=>'false')) !!}
            {!! Form::submit('Upload a Photo Gallery',['class'=>'btn btn-outline-primary']) !!}
        {!! Form::close() !!}
          </div>


{{-- 			  @foreach($galleries as $gallery)
                      <tr>
                        <td>
                        	{{$gallery->title}} 
                        </td>
                      </tr>
                        <tr>
                        <td>

                          <img 



                          src="{{ asset('database/users/'.$gallery->gallery_by.'/galleries/'.$gallery->gallery_id.'/1.PNG') }}"
                          src="{{asset("database/galleries/".
                          $gallery->gallery_id."/".scandir(public_path().'/database/galleries/' . $gallery->gallery_id)[2])}}" 
                          alt="Card image cap" width="256" height="256">
                        </td>

                      </tr>

              @endforeach --}}




        @foreach ($galleries as $gallery)
            <div class="card flex-md-row mb-4 shadow-sm h-md-200">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                        <a class="text-dark" href="/galleries/{{ $gallery->gallery_id }}">{{ $gallery->title }}</a>
                    </h3>

                    <div class="mb-1 text-muted">Posted on {{$gallery->created_at}} by 
                        {{$user = App\User::find($gallery->gallery_by)->first_name}}
                        {{$user = App\User::find($gallery->gallery_by)->last_name}}
                    </div>


                    @if((Auth::check()))

                        @if(Auth::user()->id == $gallery->gallery_by)
                        <a class="btn btn-sm btn-outline-secondary" 
                        href="/galleries/delete/{{$gallery->gallery_id}}">Delete Posting</a>

                        @elseif(Auth::user()->is_admin)
                        <a class="btn btn-sm btn-outline-secondary" 
                        href="/galleries/delete/{{$gallery->gallery_id}}">Delete Posting</a>

                        @endif
                    
                    @endif

                    



                </div>
                <img class="card-img-right flex-auto d-none d-lg-block p-3" style="max-height:200px" 
                src="{{asset("database/galleries/".
                          $gallery->gallery_id."/".scandir(public_path().'/database/galleries/' . $gallery->gallery_id)[2])}}" alt="Card image cap">
            </div>
        @endforeach              
              	
              	





          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

@endsection