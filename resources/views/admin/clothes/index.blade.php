
@extends('layouts.admin.app')
    @section('content')
    <div class="container">
        <DIV class="text-center my-4">
            <h1 >TUTTI CLOTHES</h1>
            <a href="{{ route("clothe.index") }}" class="btn btn-primary">TORNA INDIETRO</a>
            <a href="{{ route("clothe.create") }}" class="btn btn-warning">crea un articolo</a>
        </DIV>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($clothes as $clothe)
                <div class="col">
                    <div class="card h-100 bg-warning">
                        <img src="{{$clothe->img }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="card-title text-center">{{ $clothe->marca }}</h3>
                            <p class="card-text">{{ $clothe->consegna_rapida }}</p>
                            <p class="card-text">{{ $clothe->descrizione }}</p>
                            <div class="d-flex justify-content-evenly">
                                <a href="{{ route("clothe.show",$clothe->id) }}" class="btn btn-primary"> detagli</a>
                                <a href="{{ route("clothe.edit",$clothe->id) }}" class="btn btn-success"> aggiorna</a>
                                <form onsubmit="return confirm('sicuro di voler cancellare ')" action="{{ route("clothe.destroy", $clothe->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">
                                        Elimina
                                </button>
                                </form>

                            </div>
                        </div>
                        <div class="card-footer">
                        <small class="text-danger"> Prezzo : {{ $clothe->prezzo }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> 
    @endsection 