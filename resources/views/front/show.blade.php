@extends('layout.master')

@section('content')
   
    
 <div class='pb-5 pt-3 mx-auto'>
  <h1 class='text-center mx-auto'>Ma reponse</h1>
    <div class='pb-2 pt-2'>
        <p><ins>Question 1/20, entrez votre mail :<ins></p>
        <p class="font-weight-bold text-muted">{{ $response->email }}</p>
    </div>

    <div class='pb-2 pt-2'>
        <p><ins>Question 2/20, Entrez votre age :</p>
        <p class="font-weight-bold text-muted">{{ $response->age }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 3/20, entrez votre genre :</p> 
        <p class="font-weight-bold text-muted">{{ $response->genre }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 4/20, nombre de personne dans votre foyer (adulte & enfants):</p> 
        <p class="font-weight-bold text-muted">{{ $response->foyer }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 5/20, votre profession</p> 
        <p class="font-weight-bold text-muted">{{ $response->profession }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 6/20, quel marque de casque VR utilisez vous ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->casque_actuel }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 7/20, sur quel magasin d’application achetez vous des contenus VR ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->magasin_application }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 8/20, quel casque envisagez vous d’acheter dans un futur proche ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->casque_futur }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 9/20, au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</h5>
        <p class="font-weight-bold text-muted">{{ $response->utilisation_foyer }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 10/20, vous utilisez principalement Bigscreen pour :</p> 
        <p class="font-weight-bold text-muted">{{ $response->utilisation_bigscreen }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 11/20, vous utilisez principalement Bigscreen pour :</p> 
        <p class="font-weight-bold text-muted">{{ $response->point_image }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 12/20, vous utilisez principalement Bigscreen pour :</p> 
        <p class="font-weight-bold text-muted">{{ $response->point_confort }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 13/20, vous utilisez principalement Bigscreen pour :</p> 
        <p class="font-weight-bold text-muted">{{ $response->point_connection }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 14/20, vous utilisez principalement Bigscreen pour :</p> 
        <p class="font-weight-bold text-muted">{{ $response->point_graphisme }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 15/20, vous utilisez principalement Bigscreen pour :</p> 
        <p class="font-weight-bold text-muted">{{ $response->point_audio }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 16/20, aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->notification }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 17/20, aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->invitation_ami }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 18/20, aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->enregistrer_emission }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 19/20, aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->jeux_exclusifs }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p><ins>Question 20/20, quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</p> 
        <p class="font-weight-bold text-muted">{{ $response->fonctionnalité_personnelle }}<p>
    </div>

</div>

@endsection