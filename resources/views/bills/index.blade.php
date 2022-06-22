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
                            <th>code facture</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($bills as $bill)
                            <tr>
                                <td>{{ $bill->id }}</td>
                                <td><strong>{{ $bill->code_fact }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('bills.show', $bill->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('bills.edit', $bill->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('bills.destroy', $bill->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <td colspan=5>
                        <a class="button is-primary" href="{{ route('bills.create') }}">Add bill</a></td>
                </table>
            </div>
        </div>
      <footer class="card-footer">
          {{ $bills->links() }}
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





