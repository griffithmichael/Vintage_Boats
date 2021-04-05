@extends('layout')
@section('content')



          <div class="col-lg-12 text-center">
            <div class="row">
              <div class="col-lg-12">
                <h1>Galleries</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-center">
                {!! Form::open(array('route' => 'gallery.upload','method'=>'GET','files'=>'false')) !!}
                  {!! Form::submit('Upload a Photo Gallery',['class'=>'btn btn-outline-primary']) !!}
                {!! Form::close() !!}
              </div>
            </div>
            <div class="row">
              <div class="col-lg-10">
              <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="img-thumbnail m-2" style="width:300px; height:300px; padding:10px">
                        <div class="justify-content-between">
                            <h5 class="mb-0">
                                <a class="text-dark" href="/galleries/{{ $gallery->gallery_id }}">{{ $gallery->title }}</a>
                            </h5>
        
                            <small class="mb-1 text-muted">Posted on {{$gallery->created_at}} by 
                                {{$user = App\User::find($gallery->gallery_by)->first_name}}

                            </small>
      
                            @if(!(Auth::user()))
        
                            @elseif(Auth::user()->id == $gallery->gallery_by)
                            <a class="btn btn-sm btn-outline-secondary" 
                            href="/galleries/delete/{{$gallery->gallery_id}}">Delete Posting</a>
        
                            @elseif(Auth::user()->is_admin)
                            <a class="btn btn-sm btn-outline-secondary" 
                            href="/galleries/delete/{{$gallery->gallery_id}}">Delete Posting</a>
                            @endif
                        </div>
                        <div>
                          <img class="img" style="max-height:220px; max-width:90%" 
                          src="{{asset("database/galleries/".
                                    $gallery->gallery_id."/".scandir(public_path().'/database/galleries/' . $gallery->gallery_id)[2])}}" alt="Card image cap">
                        </div>
                    </div>
  @endforeach   


{{--                     @if((Auth::check()))

                        @if(Auth::user()->id == $gallery->gallery_by)
                        <a class="btn btn-sm btn-outline-secondary" 
                        href="/galleries/delete/{{$gallery->gallery_id}}">Delete Posting</a>

                        @elseif(Auth::user()->is_admin)
                        <a class="btn btn-sm btn-outline-secondary" 
                        href="/galleries/delete/{{$gallery->gallery_id}}">Delete Posting</a>

                        @endif
                    
                    @endif --}}

                    





                   
              	
              
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->
      </div>

          <br>   
        </div>

@endsection