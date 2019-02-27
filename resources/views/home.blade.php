@extends('layouts.global')

@section('title')
    Home
@endsection

@section('pageTitle')
    Selamat Datang
@endsection

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="lnr lnr-home"></i> Selamat Datang {{\Auth::user()->name}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
