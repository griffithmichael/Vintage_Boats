@extends('layout')
@section('content')




        <div class="col-md-12 blog-main">



          <div class="blog-post">
            <h2 class="blog-post-title">
            VBA Blog Posts</h2>

                   {!! Form::open(array('route' => 'blogs.store','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif
 
                      </div>
                    </div>

                    <div class="row">
 
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('Title','Title:') !!}
                            <div class="">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('title', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>
                    </div>

                      <div class="row">
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('body','Body:') !!}
                            <div class="">
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('body', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>
                    </div>

{{--                       <div class="col-xs-4 col-sm-4 col-md-4">
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
                      </div> --}}
 
                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Post',['class'=>'btn btn-primary']) !!}
                      </div>
                 {{--    </div> --}}
                   {!! Form::close() !!}
 
             </div>
 
            </div>


{{--                   @foreach ($boats as $boat)
            <div class="card flex-md-row mb-4 shadow-sm h-md-200">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{$boat->VIN}}</strong>

                    <div class="mb-1 text-muted">Posted by 
                        {{$user = App\User::find($boat->owned_by)->first_name}}
                        {{$user = App\User::find($boat->owned_by)->last_name}}
                    </div>

                    <div class="mb-1 text-muted"> 
                        {{$boat->manufacturer}}
                        {{$boat->model}}
                    </div>




                </div>

            </div>
        @endforeach --}}



@endsection