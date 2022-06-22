@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">raison social client: {{ $client->rais_soc_clt }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p> ID Client : {{$client->IDCLT}}</p><br>
                <p>code client: {{ $client->code_clt}}</p><br>
                <p>nom client: {{ $client->nom_clt}}</p><br>
                <p>prenom client: {{ $client->prenom_clt}}</p><br>
                <p>raison social client: {{ $client->rais_soc_clt}}</p><br>
                <p>num tel 1: {{ $client->numtel1_clt}}</p><br>
                <p>num tel 2: {{ $client->numtel2_clt}}</p><br>
                <p>email client: {{ $client->email_clt}}</p><br>
                <p>adresse client: {{ $client->adr_clt}}</p><br>
                <p>matricule fiscale: {{ $client->mf_clt}}</p><br>
                <p>rc client: {{ $client->rc_clt}}</p>
            </div>
        </div>
    </div>
@endsection