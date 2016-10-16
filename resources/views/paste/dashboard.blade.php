@extends('default')

@section('pagetitle') Dashboard - EdPaste @endsection

@section('navbar')
<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
@if (Auth::check())
<li class="nav-item active"><a href="/users/dashboard" class="nav-link">Dashboard</a></li>
<li class="nav-item"><a href="/users/account" class="nav-link">My Account</a></li>
<li class="nav-item"><a href=" /users/logout" class="nav-link">Logout <i>({{ Auth::user()->name }})</i></a></li>
@else
<li class="nav-item"><a href="/users/login" class="nav-link">Login</a></li>
<li class="nav-item"><a href="/users/register" class="nav-link">Register</a></li>
@endif
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-1 col-xs-offset-5"><h2><i>Todo</i></h2></div>
	</div>
</div>
@endsection
