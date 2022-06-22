<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bills</title>
</head>
<body>
    <h1> all bills </h1>
    <table >
        <thead>
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
        </thead>
        <tbody>
            @foreach($bills as $bill)
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
</body>
</html>