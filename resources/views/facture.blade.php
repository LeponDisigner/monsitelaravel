<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('vue1')
 
    @section('titre')
        <h1>Les factures</h1>
    @endsection
    
    @section('contenu')
        <p>C'est la facture n° {{ $numero }}</p>
    @endsection
</body>
</html>