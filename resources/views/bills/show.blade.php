@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">code facture : {{ $bill->code_fact }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p> ID FACT : {{$bill->IDFACT}}</p><br>
                <p> CLIENT N° : {{$bill->IDCLT}}</p><br>
                <p> Reglement : {{$bill->IDREG}}</p><br>
                <p>date facture: {{ $bill->date_fact}}</p><br>
                <p> total hors taxe: {{ $bill->totalht_fact}}</p><br>
                <p>total TTC: {{ $bill->totalttc_fact}}</p><br>
                <p>total remise: {{ $bill->totremise_fact}}</p><br>
                <p>total TVA: {{ $bill->totaltva_fact}}</p><br>
                <p>solde facture: {{ $bill->solde_fact}}</p>
            </div>
        </div>
    </div>
@endsection