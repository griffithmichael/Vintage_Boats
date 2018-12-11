@extends('layouts.dashboard')
@section('page_heading', 'VBA Events')
@section('section')
    

<div class="col-12">

    <div class="row">
		<div class="col-lg-6">
			@section ('cchart1_panel_title','Event Popularity')
			@section ('cchart1_panel_body')
			@include('widgets.charts.eventPopularity')
				<script>CreateBoatManChart(<?php echo $epData?>);</script>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))
		</div>
    </div>
</div>

@endsection