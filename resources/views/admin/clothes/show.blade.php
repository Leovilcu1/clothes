@extends('layouts.admin.app')
@section('content')

<div class="container text-center">
  <a href="{{ route("clothe.index") }}" class="btn btn-primary my-4">torna indietro</a>
  <div class="card mb-3">
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ $clothes->img }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <div class="card-body">
      <h2 class="card-title">{{ $clothes->marca }}</h2>
      <p class="card-text">Descrizione : {{ $clothes->desrizione }}</p>
      <p class="card-text"><small class="text-danger"> Prezzo : {{ $clothes->prezzo }}</small></p>
    </div>
  </div>

  
</div>

@endsection
