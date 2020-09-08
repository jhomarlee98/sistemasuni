<section id="areas" class="areas wd-90 container-fluid">
	<div class="row justify-content-center">
		<h4>CAPACÍTATE EN</h4>
	</div>
	<div class="row justify-content-center">
		@foreach($areas as $area)
			<div class="col-12 col-md-6 col-lg-4 area-content">
				<div class="card text-center">
					<img src="{{asset('images/areas/example.png')}}" class="card-img-top area-img" alt="...">
  					<div class="card-body">
    					<h5 class="card-title text-uppercase">{{$area->AreNom}}</h5>
    					<p class="card-text"> {{$area->AreDsc}} </p>
    					<a href="#" class="btn btn-danger">Ver detalle</a>
  					</div>
  					<div class="card-footer text-muted">
    					Cursos Libres
  					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>