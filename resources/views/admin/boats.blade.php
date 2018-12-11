@extends('layouts.dashboard')
@section('page_heading', 'VBA Member Boats')
@section('section')
    

<div class="col-12">

    <div class="row">
		<div class="col-lg-6">
			@section ('cchart1_panel_title','Registered Boats by Manufacturer')
			@section ('cchart1_panel_body')
			@include('widgets.charts.boatsByManufacturer')
				<script>CreateBoatManChart(<?php echo $bbmData?>);</script>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))
		</div>
    </div>
</div>

@endsection