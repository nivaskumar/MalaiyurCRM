@extends('layouts.app')

@section('content')
<div class="container">
    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
    <div class="row justify-content-center">
		<div class="col-md-8">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider/1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
		
		 <div class="col-md-4">
		
	<div class="card" style="width: 18rem;margin: 0 auto;float: none;">
  <img class="card-img-top" src="images/task-intro.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Modules</h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    
    <li class="list-group-item"><a href="{{ route('login') }}">Login</a></li>
    <li class="list-group-item"><a href="{{ route('register') }}">Register</a></li>
  </ul>
  <div class="card-body">
	
                            
  </div>
</div>
	
		
	</div>
		
		
	
	
	</div>
	</main>
</div>
@endsection

