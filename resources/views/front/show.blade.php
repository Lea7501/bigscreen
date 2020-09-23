@extends('layout.master')

@section('content')
   
    
 <div class='pb-5 pt-3 mx-auto'>
  <h1 class='text-center mx-auto'>Ma reponse</h1>
    <div class='pb-2 pt-2'>
        <p><ins>Question 1/20, entrez votre mail :<ins></p>
        <p class="font-weight-bold text-muted">{{ $response->email }}</p>
    </div>

    <div class='pb-2 pt-2'>
        <p class="font-weight-bold">Question 2/20</p> 
        <h5>Entrez votre age :<h5>
        <p>{{ $response->age }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 3/20</p> 
        <h5>Entrez votre genre :<h5>
        <p>{{ $response->genre }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 4/20</p> 
        <h5>Nombre de personne dans votre foyer (adulte & enfants)</h5>
        <p>{{ $response->foyer }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 5/20</p> 
        <h5>Votre profession</h5>
        <p>{{ $response->profession }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 6/20</p> 
        <h5>Quel marque de casque VR utilisez vous ?</h5>
        <p>{{ $response->casque_actuel }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 7/20</p> 
        <h5>Sur quel magasin d’application achetez vous des contenus VR ?</h5>
        <p>{{ $response->magasin_application }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 8/20</p> 
        <h5>Quel casque envisagez vous d’acheter dans un futur proche ?</h5>
        <p>{{ $response->casque_futur }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 9/20</p> 
        <h5>Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</h5>
        <p>{{ $response->utilisation_foyer }}<p>
    </div>

    <div class='pb-2 pt-2 '>
         <p class="font-weight-bold">Question 10/20</p> 
        <h5>Vous utilisez principalement Bigscreen pour :</h5>
        <p>{{ $response->utilisation_bigscreen }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <h5>Question 11/20</h5> 
        <h5>Vous utilisez principalement Bigscreen pour :</p>
        <p>{{ $response->point_image }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 12/20</p> 
        <h5>Vous utilisez principalement Bigscreen pour :</h5>
        <p>{{ $response->point_confort }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 13/20</p> 
        <h5>Vous utilisez principalement Bigscreen pour :</h5>
        <p>{{ $response->point_connection }}<p>
    </div>

    <div class='pb-2 pt-2 '>
         <p class="font-weight-bold">Question 14/20</p> 
        <h5>Vous utilisez principalement Bigscreen pour :</h5>
        <p>{{ $response->point_graphisme }}<p>
    </div>

    <div class='pb-2 pt-2 '>
         <p class="font-weight-bold">Question 15/20</p> 
        <h5>Vous utilisez principalement Bigscreen pour :</h5>
        <p>{{ $response->point_audio }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 16/20</p> 
        <p>Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</p>
        <p>{{ $response->notification }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 17/20</p> 
        <h5>Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</h5>
        <p>{{ $response->invitation_ami }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 18/20</p> 
        <h5>Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</h5>
        <p>{{ $response->enregistrer_emission }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 19/20</p> 
        <h5>Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</h5>
        <p>{{ $response->jeux_exclusifs }}<p>
    </div>

    <div class='pb-2 pt-2 '>
        <p class="font-weight-bold">Question 20/20</p> 
        <p>Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</p>
        <p>{{ $response->fonctionnalité_personnelle }}<p>
    </div>

</div>

@endsection