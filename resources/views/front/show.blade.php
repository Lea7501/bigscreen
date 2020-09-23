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

    <div class='pb-2 pt-2 '>
        <h5>Question 4/20</h5> 
        <p>Nombre de personne dans votre foyer (adulte & enfants)</p>
        <p>{{ $response->foyer }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 5/20</h5> 
        <p>Votre profession</p>
        <p>{{ $response->profession }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 6/20</h5> 
        <p>Quel marque de casque VR utilisez vous ?</p>
        <p>{{ $response->casque_actuel }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 7/20</h5> 
        <p>Sur quel magasin d’application achetez vous des contenus VR ?</p>
        <p>{{ $response->magasin_application }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 8/20</h5> 
        <p>Quel casque envisagez vous d’acheter dans un futur proche ?</p>
        <p>{{ $response->casque_futur }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 9/20</h5> 
        <p>Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</p>
        <p>{{ $response->utilisation_foyer }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 10/20</h5> 
        <p>Vous utilisez principalement Bigscreen pour :</p>
        <p>{{ $response->utilisation_bigscreen }}<p>
    </div>
</div>

@endsection