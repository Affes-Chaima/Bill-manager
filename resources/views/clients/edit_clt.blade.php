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
      <form method="post" action="{{ route('clients.update', $clients->IDCLT) }}">
        <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="IDCLT">IDCLT</label>
            <input type='int'  class="form-control" name='IDCLT' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="code_clt">code client</label>
            <input type='int'  class="form-control" name='code_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="nom_clt"> Nom du client</label>
            <input type="text"  class="form-control" name='nom_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="prenom_clt">Prenom du client</label>
            <input type="text"  class="form-control" name='prenom_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="rais_soc_clt">Raison social</label>
            <input type="text"  class="form-control" name='rais_soc_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="numtel1_clt">num 1</label>
            <input type='int'  class="form-control" name='numtel1_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="numtel2_clt">num 2</label>
            <input type='int'  class="form-control" name='numtel2_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="email_clt"> email client </label>
            <input type="email"  class="form-control" name='email_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for=adr_clt> adresse client</label>
            <input type="text"  class="form-control" name='adr_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="mf_clt">matricule fiscale </label>
            <input type='int'  class="form-control" name='mf_clt' class="form-control"/>
        </div>
        <div class="form-group">
            <label for="rc_clt">Registre de commerce </label>
            <input type="text"  class="form-control" name='rc_clt' class="form-control"/>
        </div>
        <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection