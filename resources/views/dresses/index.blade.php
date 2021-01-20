@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i vestiti</h1>
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
                                    {{ $dress->price }}
                                </td>
                                <td>
                                    <a href="{{ route('dresses.show', ['dress' => $dress->id ]) }}"
                                        class="btn btn-info">
                                        Dettagli
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection