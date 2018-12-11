@extends ('layouts.dashboard')
@section('page_heading','User Reports')
@section('section')
<div class="col-sm-12">	
	<div class="row">
		<div class="col-sm-6">
		<p>{{$epData}}</p>
			@section ('cchart1_panel_title','New Users Per Month')
			@section ('cchart1_panel_body')
			@include('widgets.charts.usersPerMonth')
				<script>CreateUPMChart(<?php echo $upmData?>, <?php echo $upmLabels?>);</script>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))

			@section ('cchart3_panel_title','Popularity Of Recent Events')
			@section ('cchart3_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('widgets.charts.eventPopularity')</div>
				<script>CreateEventPopChart(<?php echo $epData ?>);</script>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart3'))
		</div>
		<div class="col-sm-6">
			
			@section ('cchart2_panel_title','Registered Boats By Manufacturer')
			@section ('cchart2_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('widgets.charts.boatsByManufacturer')</div>
				<script>CreateBoatManChart(<?php echo $bbmData ?>);</script>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart2'))

			@section ('cchart4_panel_title','Bar Chart')
			@section ('cchart4_panel_body')
			@include('widgets.charts.cbarchart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart4'))
		</div> 
	</div>
	
	
</div>
@endsection
