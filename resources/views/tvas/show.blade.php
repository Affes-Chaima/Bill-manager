@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">raison social client: {{ $tva->taux_tva }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p> ID TVA : {{$tva->IDTVA}}</p><br>
                <p>code TVA: {{ $tva->code_tva}}</p><br>
                <p>TVA rate: {{ $tva->taux_tva}}</p><br>
            </div>
        </div>
    </div>
@endsection