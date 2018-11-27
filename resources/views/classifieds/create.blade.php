@extends('layout')

@section('content')
<div class="col">
    <h1 class="text-center">Create A New Listing</h1>
    <hr/>
    {!! Form::open(array('route' => 'classifieds.store','method'=>'POST','files'=>'true')) !!}
        <div class="col ml-3">
            <div class="form-group">
                <h4>{!! Form::label('title','Title:') !!}</h4>
                {!! Form::text('title', null, ['class' => 'form-control ml-4', 'style'=>'width:40%']) !!}
            </div>
            <div class="form-group">
                <h4>{!! Form::label('location','Location:') !!}</h4>
                {!! Form::text('location', null, ['class' => 'form-control ml-4', 'style'=>'width:40%']) !!}
            </div>
            <div class="form-group">
                <h4>{!! Form::label('cost','Cost:') !!}</h4>
                <div class="row ml-4"><h4>$</h4>{!! Form::number('cost', null, ['class' => 'form-control ml-2', 'style'=>'width:25%']) !!}</div>
            </div>
            <div class="form-group">
                <h4>{!! Form::label('description','Description:') !!}</h4>
                {!! Form::textArea('description', null, ['class' => 'form-control ml-4', 'style'=>'width:60%']) !!}
            </div>
            <div class="form-group">
                <h4>{!! Form::label('images','Pictures:') !!}</h4>
                <input type="file" name="images[]" multiple="true">
            </div>
            {!! Form::submit('Submit',['class'=>'btn-lg btn-outline-primary mt-4 mb-5']) !!}
        </div>
    {!! Form::close() !!}
</div>
@endsection