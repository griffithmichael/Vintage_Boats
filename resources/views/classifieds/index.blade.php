@extends('layout')

@section('content')
    

<div class="col">

    <div class="text-center p-3">
        <h1>Member Classifieds</h1>
    </div>

    <div class="text-center mb-3">
        {!! Form::open(array('route' => 'classifieds.store','method'=>'GET','files'=>'false')) !!}
            {!! Form::submit('Create a Listing',['class'=>'btn btn-outline-primary']) !!}
        {!! Form::close() !!}
    </div>

    <div class="row">

        <div class="col">

        @foreach ($classifieds as $classified)
            <div class="card flex-md-row mb-4 shadow-sm h-md-200">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">${{$classified->cost}}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="/classifieds/{{ $classified->classified_id }}">{{ $classified->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted">Posted on {{$classified->created_at}} by user {{$classified->posted_by}}</div>
                    <p class="card-text mb-auto">{{$classified->description}}</p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block p-3" style="max-height:200px" src="{{asset("lymans.jpg")}}" alt="Card image cap">
            </div>
        @endforeach

        </div>

        <div class="col-3">
            <div class="p-3 mb-3 bg-light rounded">
                {!! Form::open(array('route' => 'classifieds.store','method'=>'GET','files'=>'true')) !!}
                <div class="row m-2 justify-content-between">
                    <h4 class="font-italic">Filters</h4>
                    {!! Form::submit('Go',['class'=>'btn btn-outline-secondary']) !!}
                </div>
                <div class="col">
                
                    <div>
                        <strong>Styles</strong>
                    </div>
                    <div class="pl-2">
                        <div style="margin:0">
                            {!! Form::checkbox('lyman', '0') !!}
                            Lyman
                        </div>
                        <div class="md-0">
                            {!! Form::checkbox('runabout', '1') !!}
                            Runabout
                        </div>
                        <div>
                            {!! Form::checkbox('yacht', '2') !!}
                            Yacht
                        </div>
                        <div>
                            {!! Form::checkbox('keelboat', '3') !!}
                            Keelboat
                        </div>
                        <a href="#">more...</a>
                    </div>
                    <hr/>
                    <!----------------->
                    <div>
                        <strong>Brands</strong>
                    </div>
                    <div class="pl-2">
                        <div style="margin:0">
                            {!! Form::checkbox('chris_craft', '0') !!}
                            Chris-Craft
                        </div>
                        <div class="md-0">
                            {!! Form::checkbox('stanley', '1') !!}
                            Stanley
                        </div>
                        <div>
                            {!! Form::checkbox('hutchinson', '2') !!}
                            Hutchinson
                        </div>
                        <div>
                            {!! Form::checkbox('century', '3') !!}
                            Century
                        </div>
                        <a href="#">more...</a>
                    </div>
                    <hr/>
                    <!----------------->
                    <div>
                        <strong>Price Range</strong>
                    </div>
                    <div class="flex-col m-2">
                        <div class="text-center">$ {!! Form::number('price_low', 0, ['style'=>'width:90%']) !!}</div>
                        <div class="text-center">to</div>
                        <div class="text-center">$ {!! Form::number('price_high', 100000, ['style'=>'width:90%']) !!}</div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>

@endsection