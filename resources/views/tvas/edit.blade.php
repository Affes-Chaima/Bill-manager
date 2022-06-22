@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tvas.update', $tvas->IDTVA) }}">
        <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="IDTVA">ID TVA</label>
            <input type='int'  class="form-control" name='IDTVA' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="code_tva">code TVA  </label>
            <input type='int'  class="form-control" name='code_tva' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="taux_tva">taux Tva </label>
            <input type='int'  class="form-control" name='taux_tva' class="form-control"/>
        </div>
        <button type="submit" class="btn btn-block btn-danger">Update TVA</button>
      </form>
  </div>
</div>
@endsection