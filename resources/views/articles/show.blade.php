@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">article:{{ $article->lib_art }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>IDART:{{$article->IDART}}</p><br>
                <p> IDTVA/{{ $article->IDTVA}}</p><br>
                <p>code_art: {{ $article->code_art}}</p><br>
                <p>unit price hors taxe: {{ $article->puttc_art}}</p><br>
                <p>max discount article: {{ $article->maxremise_art}}</p><br>
                <p>stockability:{{ $article->stockable_art }}<p><br>
                <p>active: {{ $article->actif_art}}</p><br>
                <p>stock: {{ $article->depstsk_art}}</p>
                <p>bar code: {{ $article->codebarre_art}}</p>
                <p>cash: {{ $article->prixcash_art}}</p>
            </div>
        </div>
    </div>
@endsection