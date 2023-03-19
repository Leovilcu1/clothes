@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h1>INSERISCI NUOVO ARTICOLO</h1>
                    <a href="{{ route("clothe.index") }}" class="btn btn-primary">TORNA INDIETRO</a>
                </div>
                
                <form action="{{ route("clothe.store") }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca *</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="marca del articolo " required>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">img</label>
                        <input type="text" class="form-control" id="img" name="img" placeholder="url del img">
                    </div>
                    <div class="mb-3">
                        <label for="prezzo" class="form-label">Prezzo *</label>
                        <input type="text" class="form-control" id="prezzo" name="prezzo" placeholder="Inserisci il prezzo " required>
                      </div>                      
                    <div class="mb-3">
                        <label for="genere" class="form-label">genere</label>
                        <input type="text" class="form-control" id="genere" name="genere" placeholder="genere">
                    </div>
                    <div class="mb-3">
                        <label for="descrizione" class="form-label">descrizione</label>
                        <input type="text" class="form-control" id="descrizione" name="descrizione" placeholder="descrizione">
                    </div>
                    <div class="mb-3">
                        <label for="consegna_rapida" class="form-label">conseegna_rapida *</label>
                        <input type="number" class="form-control" id="consegna_rapida" name="consegna_rapida" placeholder="inserisci il consegna_rapida" required >
                    </div>
                    <div class="mb-3">
                        <label for="colezzione_nuova" class="form-label">colezzione_nuova *</label>
                        <input type="number" class="form-control" id="colezzione_nuova" name="colezzione_nuova" placeholder="inserisci il colezzione_nuova" required>
                    </div>
                    
                    

                    <div class="mb-3">
                        <label for="tipo" class="form-label">tipo *</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo del articolo" required >
                    </div>
                    <div class="mb-3">
                        <label for="taglia" class="form-label">taglia *</label>
                        <input type="text" class="form-control" id="taglia" name="taglia" placeholder="taglia del articolo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        CREA
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection