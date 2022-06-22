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
            <p class="card-header-title"> Clients</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>raison social client</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td><strong>{{ $client->rais_soc_clt }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('clients.show', $client->IDCLT) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('clients.edit', $client->IDCLT) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('clients.destroy', $client->IDCLT) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <td colspan=5>
                        <a class="button is-primary" href="{{ route('clients.create') }}">Add client</a></td>
                </table>
            </div>
        </div>
      <footer class="card-footer">
          {{ $clients->links() }}
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





