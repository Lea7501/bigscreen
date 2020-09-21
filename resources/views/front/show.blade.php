@extends('layout.master')

@section('content')
   
    
 <div class='pb-5 pt-3 mx-auto'>
  <h1 class='text-center mx-auto'>Ma reponse</h1>
    <div class='pb-2 pt-2'>
        <h5>Question 1/20</h5> 
        <p>Entrez votre mail :</p>
        <p>{{ $response->email }}<p>
    </div>

    <div class='pb-2 pt-2'>
        <h5>Question 2/20</h5> 
        <p>Entrez votre age :</p>
        <p>{{ $response->age }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 3/20</h5> 
        <p>Entrez votre genre :</p>
       
        <p>{{ $response->genre }}<p>
        
    </div>
</div>

@endsection