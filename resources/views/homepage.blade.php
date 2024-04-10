@extends('layouts/app')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MY-FERROVIA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Le Linee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Lavora Con Noi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row p-4 bg-primary">
    @foreach($trains as $train)
        <div class="col-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Treno: {{ $train->codice_treno }}</h5>
                    <p class="card-text">Azienda: {{ $train->azienda }}</p>
                    <p class="card-text">Stazione di partenza: {{ $train->stazione_partenza }}</p>
                    <p class="card-text">Stazione di arrivo: {{ $train->stazione_arrivo }}</p>
                    <p class="card-text">Orario di partenza: {{ $train->orario_partenza }}</p>
                    <p class="card-text">Orario di arrivo: {{ $train->orario_arrivo }}</p>
                    <p class="card-text">Numero Carrozze: {{ $train->numero_carrozze }}</p>
                    @if ($train->cancellato)
                        <p class="card-text text-danger">Stato: Cancellato</p>
                    @else
                        <p class="card-text">Stato: {{ $train->in_orario ? 'In orario' : 'In ritardo' }}</p>
                    @endif
                    <img src="{{ $train->immagine }}" alt="Immagine del treno">
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection