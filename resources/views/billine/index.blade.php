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
            <p class="card-header-title">Bills</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>facture n°</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($blines as $bline)
                            <tr>
                                <td>{{ $bline->id }}</td>
                                <td><strong>{{ $bline->IDFACT }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('bline.show', $bline->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('bline.edit', $bline->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('bline.destroy', $bline->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <td colspan=5>
                        <a class="button is-primary" href="{{ route('bline.create') }}">Add bill</a></td>
                </table>
            </div>
        </div>
      <footer class="card-footer">
          {{ $blines->links() }}
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
