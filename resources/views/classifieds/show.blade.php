@extends('layout')

@section('content')
<div class="col">
<h1 class="text-center">{{$classified->title}}</h1>
<div class="row">
    <div class="col-8">
        <div class="classified-image-continer text-center border p-1">
            <img src="{{asset("lymans.jpg")}}" alt="Image Container" class="img-fluid">
        </div>

        <div class="classified-thumbnail-container">
            <img src="{{asset("lymans.jpg")}}" alt="Image Container" class="img-fluid img-thumbnail" style="height:150px">
            <img src="{{asset("lymans.jpg")}}" alt="Image Container" class="img-fluid img-thumbnail" style="height:150px">
            <img src="{{asset("lymans.jpg")}}" alt="Image Container" class="img-fluid img-thumbnail" style="height:150px">
        </div>

        <h2>
            ${{$classified->cost}}
        </h2>
        <h4>Posted {{$classified->created_at}} by {{$classified->posted_by}}</h4>
        <p>{{$classified->description}}</p>
    </div>
    <div class="col-4 bg-light border" style="flex-wrap: wrap">
        <h4 class="text-center pt-2">Contact This Seller</h4>
        {!! Form::open(array('route' => 'classifieds','method'=>'GET','files'=>'true')) !!}

            {!! Form::label('email','Your Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control ml-1', 'style'=>'width:90%', 'placeholder'=>'name@example.com']) !!}
            <br/>
            {!! Form::label('message','Your Message:') !!}
            {!! Form::textArea('email', null, ['class' => 'form-control ml-1', 'style'=>'width:90%', 'placeholder'=>'Hi, I am contacting you regarding your ad on the Vintage Boat Association website!']) !!}

            {!! Form::submit('Contact',['class'=>'btn btn-outline-secondary m-2 mt-4']) !!}
                
        {!! Form::close() !!}
    </div>
    
</div>
<br/>
</div>

@endsection