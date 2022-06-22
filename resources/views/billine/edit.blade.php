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
      <form method="post" action="{{ route('blines.update', $blines->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="IDFACT">IDFACT</label>
              <input type='int'  class="form-control" name='IDFACT' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="IDART">IDART</label>
            <input type='int'  class="form-control" name='IDART' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="qte_art">quantité article</label>
            <input type='int'  class="form-control" name='qte_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="puht_art">prix unitaire hors taxe</label>
            <input type='int'  class="form-control" name='puht_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="remise_art">remise article</label>
            <input type='int'  class="form-control" name='remise_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="punetht_art">prix net hors taxe</label>
            <input type='int'  class="form-control" name='punetht_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totalnetht_art">Tot net hors taxe</label>
            <input type='int'  class="form-control" name='totalnetht_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totalht_art">total hors taxe</label>
            <input type='int'  class="form-control" name='totalht_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="totalttc_art">total TTC</label>
            <input type='int'  class="form-control" name='totalttc_art' class="form-control"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update bill line</button>
      </form>
  </div>
</div>
@endsection