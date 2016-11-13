@extends('layouts.app')

@section('content')

	<div>
	{!! link_to_route('shipper.index','old') !!} &nbsp;&nbsp;
	{!! link_to_route('new_shipper','new') !!} &nbsp;&nbsp;
	{!! link_to_route('shipper.create','create') !!} &nbsp;&nbsp;
	</div>
	<div>
		<h3>Create</h3>
		{!! Form::open(['route' => 'shipper.store']) !!}
			@include('shipper.__form')
		{!! Form::close() !!}
	</div>
@stop