@extends('layouts.dashboard')
@section('page_heading', 'VBA Users')
@section('section')
    

<div class="col-12">

    <div class="row">
        <div class="col-lg-8">
            @include('widgets.tables.users', array('class'=>'table-hover table-condensed table-bordered'))
        </div>
    </div>

    




</div>

@endsection