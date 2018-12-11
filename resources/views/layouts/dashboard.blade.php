@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/') }}">Vintage Boat Association - Ontario Chapter</a>
            </div>
            <!-- /.navbar-header -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li {{ (Request::is('/admin') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li {{ (Request::is('*admin/users/all') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin/users/all') }}"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li {{ (Request::is('/admin/boats') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin/boats') }}"><i class="fa fa-anchor fa-fw"></i> Boats</a>
                        </li>
                        <li {{ (Request::is('/admin/events') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin/events') }}"><i class="fa fa-calendar fa-fw"></i> Events</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

