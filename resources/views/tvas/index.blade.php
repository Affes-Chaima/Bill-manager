@extends('template')
@section('content')
<div class="push-top">
  @section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title"> TVA </p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Taux TVA </th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($tvas as $tva)
                            <tr>
                                <td>{{ $tva->IDTVA }}</td>
                                <td><strong>{{ $tva->taux_tva }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('tvas.show', $tva->IDTVA) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('tvas.edit', $tva->IDTVA) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('tvas.destroy', $tva->IDTVA) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <td colspan=5>
                        <a class="button is-primary" href="{{ route('tvas.create') }}">Add tva</a></td>
                </table>
            </div>
        </div>
      <footer class="card-footer">
          {{ $tvas->links() }}
      </footer>
      @section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
    </style>
@endsection
  </div>
@endsection





