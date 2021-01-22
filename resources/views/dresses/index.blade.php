@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Tutti i vestiti</h1>
                <a href="{{ route('dresses.create') }}" class="btn btn-primary">
                    Inserisci nuovo vestito
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Colore</th>
                            <th scope="col">Taglia</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dresses as $dress)
                            <tr>
                                <td>
                                    {{ $dress->id }}
                                </td>
                                <td>
                                    {{ $dress->name }}
                                </td>
                                <td>
                                    {{ $dress->color }}
                                </td>
                                <td>
                                    {{ $dress->size }}
                                </td>
                                <td>
                                    &euro; {{ number_format($dress->price, 2, ',', ' ') }}
                                </td>
                                <td>
                                    <a href="{{ route('dresses.show', ['dress' => $dress->id]) }}"
                                        class="btn btn-info">
                                        Dettagli
                                    </a>
                                    <a href="{{ route('dresses.edit', ['dress' => $dress->id]) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                    <form method="POST" class="d-inline-block" 
                                    action="{{ route('dresses.destroy', ['dress' => $dress->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Cancella
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
