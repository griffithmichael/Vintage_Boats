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
                        <li >
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*admin/users/all') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/users/all') }}"> Manage Users</a>
                                </li>
                                <li {{ (Request::is('*admin/users/reports') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/users/reports' ) }}"> Reports</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-bed fa-fw"></i> Beds<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*beds/report') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/beds/report') }}"> Room Utilization Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-stethoscope fa-fw"></i> Physicians<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*physicians/lookup*') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/physicians/lookup') }}"> Lookup Physician Info</a>
                                </li>
                                <li {{ (Request::is('*physicians/report') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/physicians/report' ) }}"> Admitted Patients Report</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-money fa-fw"></i> Billing<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*billing/lookup') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/billing/lookup') }}"> Lookup Patient Bill</a>
                                </li>
                                <li {{ (Request::is('*billing/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/billing/create' ) }}"> Enter a New Transaction</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-book fa-fw"></i> Inventory<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*inventory/items') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/inventory/items') }}"> Lookup Inventory Item</a>
                                </li>
                                <li {{ (Request::is('*inventory/cost_centers') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('/inventory/cost_centers' ) }}"> Manage Cost Centers</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                            <a href="{{ url ('documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
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

