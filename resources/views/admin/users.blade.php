@extends('layouts.dashboard')
@section('page_heading', 'VBA Users')
@section('section')
    

<div class="col-12">

    <div class="row">
        <div class="col-lg-6">
            @include('widgets.tables.users', array('class'=>'table-hover table-condensed table-bordered'))
        </div>
		<div class="col-lg-6">
			@section ('cchart1_panel_title','New Users Per Month')
			@section ('cchart1_panel_body')
			@include('widgets.charts.usersPerMonth')
				<script>CreateUPMChart(<?php echo $upmData?>, <?php echo $upmLabels?>);</script>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))
		</div>
    </div>
</div>

@endsection