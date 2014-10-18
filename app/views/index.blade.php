@extends('layout')
@section('recipe')
<div class="items">
	@foreach($topics as $topic)
		<div class="col-md-2 item" >			
			<img class="pic" src="{{Request::url()}}/images/post-img/{{$topic->getAllPicPath->first()->imgPath}}"/>
		</div>		
	@endforeach
</div>
@stop
@section('place')
<div class="items">
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
	<div class="col-md-2 item" ></div>
</div>
@stop