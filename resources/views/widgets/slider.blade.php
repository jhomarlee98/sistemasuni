<div id="sliders" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  	@for ($i = 0; $i < $indice; $i++)
      <li data-target="#sliders" data-slide-to="{{ $i }}" @if($i ==0) class="active" @endif ></li>
    @endfor
  </ol>
  <div class="carousel-inner">
  	@if (!empty($data))
  		@foreach($data as $banner)
    		<div class="carousel-item @if($banner->BanPos=='1') active @endif">
      		<img src="{{asset($banner->BanUrl)}}" class="d-block w-100" alt="{{$banner->BanNom}}">
      		<div class="carousel-caption  d-block">
        		<h4 class="d-none d-md-block text-uppercase">{{$banner->BanTxt}}</h4>
        		<a href="{{$banner->BanRed}}" class="btn btn-primary btn-sm " role="button" aria-pressed="true">{{$banner->BanNom}}</a>
      		</div>
    		</div>
    	@endforeach
    @endif
  </div>
  <a class="carousel-control-prev" href="#sliders" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#sliders" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>