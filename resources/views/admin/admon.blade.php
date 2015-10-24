@extends('layout.principal')
	@section('link') 
		<link rel="stylesheet" href="{{asset('assets/css/admon/admonIndex.css')}}">
		
	@stop

	@section('contenido')
	<div class="row container-principal-options--">
		<div class="col-lg-4 animated zoomIn" style="animation-delay: 0.4s">
			<div class="container-option add-gallery animated">
				<div class="center-porcent">
					<span class="fa fa-camera-retro"></span>
				</div> 
				<p class="desc-option">Agregar Galería</p>

			</div>
		</div>
		<div class="col-lg-4 animated zoomIn" style="animation-delay: 0.5s">
			<div class="container-option add-event animated">
				<div class="center-porcent">
					<span class="fa fa-group"></span>
				</div> 
				<p class="desc-option">Agregar Evento</p>

			</div>
		</div>
		<div class="col-lg-4 animated zoomIn" style="animation-delay: 0.6s">
			<div class="container-option add-publicity animated">
				<div class="center-porcent">
					<span class="fa fa-bullhorn"></span>
				</div> 
				<p class="desc-option">Agregar Publicidad</p>

			</div>
		</div>
		
	   </div>
	@stop
@stop