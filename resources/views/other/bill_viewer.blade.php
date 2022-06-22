<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Student Records</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>IDFACT</th>
        <th>IDCLT</th>
        <th>IDSOC</th>
        <th>code facture</th>
        <th>date facture</th>
        <th> total hors taxe</th>
        <th>total TTC</th>
        <th>total remise</th>
        <th>total TVA</th>
        <th>solde facture</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($bills as $bill)
      <tr>
        <td>{{$bill->IDFACT}}</td>
        <td>{{ $bill->IDCLT}}</td>
        <td>{{ $bill->IDSOC}}</td>
        <td >{{ $bill->code_fact}}</td>
        <td>{{ $bill->date_fact}}</td>
        <td>{{ $bill->totalht_fact}}</td>
        <td >{{ $bill->totalttc_fact}}<td>
        <td >{{ $bill->totalremise_fact}}</td>
        <td>{{ $bill->totaltva_fact}}</td>
        <td>{{ $bill->solde_fact}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
-------------------------------------------------index/bills------------------
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>id</td>
          <td>IDFACT</td>
          <td>IDCLT</td>
          <td>IDSOC</td>
          <td>code facture</td>
          <td>date facture</td>
          <td>total hors taxe</td>
          <td>total TVA</td>
          <td>total TTC</td>
          <td>total remise</td>
          <td>solde facture</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bills as $bill)
        <tr>
          <td>{{$bill->id }}</td>
          <td>{{$bill->IDFACT}}</td>
          <td>{{$bill->IDCLT}}</td>
          <td>{{$bill->IDSOC}}</td>
          <td >{{$bill->code_fact}}</td>
          <td>{{$bill->date_fact}}</td>
          <td>{{$bill->totalht_fact}}</td>
          <td>{{$bill->totaltva_fact}}</td>
          <td >{{$bill->totalttc_fact}}</td>
          <td >{{$bill->totremise_fact}}</td>
          <td>{{$bill->solde_fact}}</td>
          <td class="text-center">
            <a href="{{ route('bills.edit', $bill->id)}}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('bills.destroy', $bill->id)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
---------------------------
