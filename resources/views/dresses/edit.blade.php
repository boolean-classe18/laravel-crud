@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Modifica vestito</h1>
                <form method="POST" action="{{ route('dresses.update', ['dress' => $dress->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name"
                        value="{{ $dress->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <textarea name="description" rows="4"
                        class="form-control">{{ $dress->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color"
                        value="{{ $dress->color }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name="price"
                        value="{{ $dress->price }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stagione</label>
                        <select class="form-control" name="season">
                            <option value="">--seleziona--</option>
                            <option value="estivo"
                            {{ $dress->season == 'estivo' ? 'selected=selected' : ""}}>
                                estivo
                            </option>
                            <option value="primaverile"
                            {{ $dress->season == 'primaverile' ? 'selected="selected"' : ""}}>
                                primaverile
                            </option>
                            <option value="autunnale"
                            {{ $dress->season == 'autunnale' ? 'selected="selected"' : ""}}>
                                autunnale
                            </option>
                            <option value="invernale"
                            {{ $dress->season == 'invernale' ? 'selected="selected"' : ""}}>
                                invernale
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <input type="text" name="size"
                        value="{{ $dress->size }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            Salva vestito
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
