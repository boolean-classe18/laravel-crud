@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Dettaglio vestito {{ $dress->id }}</h1>
                <ul>
                    <li>Nome: {{ $dress->name }}</li>
                    <li>Prezzo: &euro; {{ number_format($dress->price, 2, ',', ' ') }}</li>
                    <li>Descrizione: {{ $dress->description }}</li>
                    <li>Stagione: {{ $dress->season }}</li>
                    <li>Taglia: {{ $dress->size }}</li>
                    <li>Colore: {{ $dress->color }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
