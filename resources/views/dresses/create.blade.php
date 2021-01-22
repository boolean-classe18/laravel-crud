@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Inserimento nuovo vestito</h1>
                <form method="POST" action="{{ route('dresses.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stagione</label>
                        <select class="form-control" name="season">
                            <option value="">--seleziona--</option>
                            <option value="estivo">estivo</option>
                            <option value="primaverile">primaverile</option>
                            <option value="autunnale">autunnale</option>
                            <option value="invernale">invernale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <input type="text" name="size" class="form-control">
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
