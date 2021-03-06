@extends('layout')
@section('content')




        <div class="col-md-12 blog-main">



          <div class="blog-post">
            <h2 class="blog-post-title">
            Your Boats</h2>

                   {!! Form::open(array('route' => 'boats.store','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif
 
                      </div>
 
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('VIN','VIN:') !!}
                            <div class="">
                            {!! Form::text('VIN', null, ['class' => 'form-control', 'maxlength' => 17]) !!}
                            {!! $errors->first('VIN', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('model','Model:') !!}
                            <div class="">
                            {!! Form::text('model', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('model', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('manufacturer','Manufacturer:') !!}
                            <div class="">
                            {!! Form::text('manufacturer', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('manufacturer', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>

 
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                          {!! Form::label('year','Year:') !!}
                          <div class="">
                          {!! Form::date('year', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('year', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                          {!! Form::label('year_purchased','Year Purchased:') !!}
                          <div class="">
                          {!! Form::date('year_purchased', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('year_purchased', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                          {!! Form::label('currently_own','Currently Own?') !!}
                          <div class="">
                          {!! Form::checkbox('currently_own', 1, ['class' => 'form-control']) !!}
                          {!! $errors->first('currently_own', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Add Boat',['class'=>'btn btn-primary']) !!}
                      </div>
                    </div>
                   {!! Form::close() !!}

                   <hr>
 
             </div>
 





                  @foreach ($boats as $boat)
            <div class="card flex-md-row mb-4 shadow-sm h-md-200">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{$boat->VIN}}</strong>
{{--                     <h3 class="mb-0">
                        <a class="text-dark" href="/classifieds/{{ $classified->classified_id }}">{{ $classified->title }}</a>
                    </h3>
 --}}
                    <div class="mb-1 text-muted">Posted by 
                        {{$user = App\User::find($boat->owned_by)->first_name}}
                        {{$user = App\User::find($boat->owned_by)->last_name}}
                    </div>

                    <div class="mb-1 text-muted"> 
                        {{$boat->manufacturer}}
                        {{$boat->model}}
                    </div>


                        @if(Auth::user()->id == $boat->owned_by)

                            <p>Do you have a gallery of this boat?</p>

                                {!! Form::open(array('route' => 'boats.addgallery','method'=>'POST','files'=>'true')) !!}




                                {{ Form::select('gallery_id', $your_gallery, null, ['class' => 'form-control']) }}
                           
                                {{ Form::hidden('VIN', $boat->VIN) }}

                                {!! Form::submit('Yes',['class'=>'btn btn-outline-primary']) !!}
                                {!! Form::close() !!}


                        @endif

                    



                </div>
                {{-- <img class="card-img-right flex-auto d-none d-lg-block p-3" style="max-height:200px" 
                src="{{asset("database/classified/".$classified->classified_id."/1.PNG")}}" alt="Card image cap"> --}}
            </div>
        @endforeach

        <hr>

        <div class="blog-post">
                      <h2 class="blog-post-title">
            View pictures of the following boats:</h2>


        @foreach ($boat_galleries as $boat_gallery)

        <a class="text-dark" href="/galleries/{{ $boat_gallery->gallery_id }}">{{$boat_gallery->model . ' ' . $boat_gallery->manufacturer}} by {{$user = App\User::find($boat_gallery->gallery_by)->first_name}}</a> <br/>

        @endforeach

      </div>


            </div>

@endsection