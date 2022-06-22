@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">articles list :</p>
        </header>
        <div class="card-content">
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary" href="{{ '#' }}">Télécharger PDF</a>
            </div>
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>ID ART</th>
                            <th>ID TVA</th>
                            <th>code article</th>
                            <th> libellé </th>
                            <th> prix unitaire hors taxe</th>
                            <th>max remise article</th>
                            <th>stockabilité</th>
                            <th>actif </th>
                            <th>dépot stock </th>
                            <th>code à barre </th>
                            <th>prix cash </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $articles as $article)
                        <tr>
                <td>{{$article->IDART}}</td>
                <td> {{ $article->IDTVA}}</td>
                <td> {{ $article->code_art}}</td>
                <td>{{ $article->lib_art }}</td>
                <td> {{ $article->puttc_art}}</td>
                <td>{{ $article->maxremise_art}}</td>
                <td>{{ $article->stockable_art }}<td>
                <td>{{ $article->actif_art}}</td>
                <td>{{ $article->depstsk_art}}</td>
                <td>{{ $article->codebarre_art}}</td>
                <td>{{ $article->prixcash_art}}</td>
                <tr>
                @endforeach
                </tbody>
            </div>
        </div>
    </div>
@endsection
