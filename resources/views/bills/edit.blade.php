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
      <form method="post" action="{{ route('bills.update', $bill->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="IDFACT">IDFACT</label>
              
              <input type='int' value="{{$bill->date_fact}}" class="form-control" name='IDFACT' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="IDCLT">client </label>
              <input type='int'  class="form-control" name='IDCLT' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="IDREG">reglement </label>
              <input type='int'  class="form-control" name='IDREG' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="code_fact">code facture</label>
            <input type="text"  class="form-control" name='code_fact' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="date_fact">date facture</label>
            <input type="date"  class="form-control" name='date_fact' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totalht_fact">total hors taxe</label>
            <input type='int'  class="form-control" name='totalht_fact' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totaltva_fact">TVA</label>
            <input type='int'  class="form-control" name='totaltva_fact' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totalttc_fact">total TTC</label>
            <input type='int'  class="form-control" name='totalttc_fact' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totremise_fact">remise</label>
            <input type='int'  class="form-control" name='totremise_fact' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="solde_fact">solde facture</label>
            <input type='int'  class="form-control" name='solde_fact' class="form-control"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Bill</button>
      </form>
  </div>
</div>
@endsection