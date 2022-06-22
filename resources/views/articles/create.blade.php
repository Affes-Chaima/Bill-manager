@extends('layout')

@section('content')
<script src=ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
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
    Add article
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
      <form method="post" action="{{ route('articles.store') }}">
          <div class="form-group">
              @csrf
              <label for="IDART">IDART</label>
              <input type='int'  class="form-control" name='IDART' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="IDTVA">tva   </label>
              <input type='int'  class="form-control" name='IDTVA' class="tva"/>
          </div>

          <div class="form-group">
            <label for="code_art">code article</label>
            <input type='int'  class="form-control" name='code_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="lib_art">libellé article</label>
            <input type="text"  class="form-control" name='lib_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="puht_art">prix unitaire hors taxe</label>
            <input type='int'  class="form-control" name='puht_art' class="form-control"/>
          </div>
          <div class="form-group">
              <script type="text/javascript">
            $document.ready(function(){
                $document.on('change','.tva',function(){
                    console.log("tva changed");
                    var rate=$(this).val();
                    console.log(rate);
                });
            }</Script>

            <label for="puttc_art">prix unitaire TTC</label>
            <input type='int'  class="form-control" name='puttc_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="maxremise_art"> maxremise </label>
            <input type='int'  class="form-control" name='maxremise_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="stockable_art">stock</label>
            <div>
            <input type="radio" id="yes" class="form-group" name="stockable_art" value="0">
            <label for ="Yes">Yes</label><br>
            <input type="radio" id="no" class="form-group" name="stockable_art" value="1">
            <label for ="No">No</label>
            </div>
            </div>
          <div class="form-group">
            <label for="actif_art">actif article</label>
            <input type='int' class="form-control" name='actif_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="depstsk_art">depot stock</label>
            <input type='int' class="form-control" name='depstsk_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="codebarre_art">bar code</label>
            <input type='int' class="form-control" name='codebarre_art' class="form-control"/>
          </div>
          <div class="form-group">
            <label for="prixcash_art"> cash price</label>
            <input type='int' class="form-control" name='prixcash_art' class="form-control"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger"> Create Article </button>
      </form>
  </div>
</div>
@endsection
