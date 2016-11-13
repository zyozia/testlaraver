@extends('layouts.app')

@section('content')

	<div>
	{!! link_to_route('shipper.index','old') !!} &nbsp;&nbsp;
	{!! link_to_route('new_shipper','new') !!} &nbsp;&nbsp;
	{!! link_to_route('shipper.create','create') !!} &nbsp;&nbsp;
	</div>
	@foreach($shippers as $shipper)
	<div>
		<h3>{{ $shipper->article }}</h3>
		<p>{{ $shipper->name }}</p>
		<p>{{ $shipper->city }}</p>
		<p>{{ $shipper->phone }}</p>
		<p>{{ $shipper->contactPerson }}</p>
		<p>{{ $shipper->created_at }}</p>
	</div>
	@endforeach
@stop