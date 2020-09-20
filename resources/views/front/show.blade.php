@extends('layout.master')

@section('content')
   
    <h1>Ma reponse</h1>
    
    <br><br>
   
    <h4>Question 1/20</h4> 
    <p>Entrez votre mail</p>
    <p>{{ $response->email }}<p>
    <br>

    <h4>Question 2/20</h4> 
    <p>Entrez votre mail</p>
    <p>{{ $response->age }}<p>
    <br>

    <h4>Question 3/20</h4> 
    <p>Entrez votre mail</p>
    <p>{{ $response->genre }}<p>
    <br>


@endsection