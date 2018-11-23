@extends('layout')
@section('content')




        <div class="col-md-12 blog-main">



          <div class="blog-post">
            <h2 class="blog-post-title">
            Your Boats</h2>

                   {!! Form::open(array('route' => 'events.store','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
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
                            {!! Form::text('VIN', null, ['class' => 'form-control']) !!}
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
                          {!! Form::checkbox('currently_own', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('currently_own', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Add Boat',['class'=>'btn btn-primary']) !!}
                      </div>
                    </div>
                   {!! Form::close() !!}
 
             </div>
 
            </div>


            </div>



@endsection