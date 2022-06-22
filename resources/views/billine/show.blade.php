@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title"> facture : {{ $bline->IDFACT }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p> bill line : {{$bline->IDFACT}}</p><br>
                @foreach ($data as $ART )
                <@if ($bline->IDFACT=$data->IDFACT)
                <p> facture : {{$bline->IDART}}</p><br>
                <p> Reglement : {{$bill->IDREG}}</p><br>
                <p>date facture: {{ $bill->date_fact}}</p><br>
                <p> total hors taxe: {{ $bill->totalht_fact}}</p><br>
                <p>total TTC: {{ $bill->totalttc_fact}}</p><br>
                <p>total remise: {{ $bill->totremise_fact}}</p><br>
                <p>total TVA: {{ $bill->totaltva_fact}}</p><br>
                <p>solde facture: {{ $bill->solde_fact}}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
