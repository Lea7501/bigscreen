<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use DB;

class FrontController extends Controller{

    // Vue du questionnaire en page d'accueil
    public function questionnaire(){
        return view('front.index');
    }

    // Insertion des données (reponses au questionnaire par 
    // l'utilisateur) dans la BDD
    public function traitement(){
        // Règle de validation de laravel
        request()->validate([
            'email' => ['required', 'email', 'unique:responses,email'],
            'age' => ['required'],
            /*'genre' => ['required'],*/
            'foyer' => ['required'],
            'profession' => ['required'],
            /*'casque_actuel' => ['required'],
            'magasin_application' => ['required'],
            'casque_futur' => ['required'],*/
            'utilisation_foyer' => ['required'],
            /*'utilisation_bigscreen' => ['required'],
            'point_image' => ['required'],
            'point_confort' => ['required'],
            'point_connection' => ['required'],
            'point_graphisme' => ['required'],
            'point_audio' => ['required'],
            'notification' => ['required'],
            'invitation_ami' => ['required'],
            'enregistrer_emission' => ['required'],
            'jeux_exclusifs' => ['required'],*/
            'fonctionnalité_personnelle' => ['required'],
        ]);

        // Permet de stocker les informations dans la BDD - la requête create correspond a un new + save
        $response = \App\Response::create([
            'email' => request('email'),
            'age' => request('age'),
            'genre' => request('genre'),
            'foyer' => request('foyer'),
            'profession' => request('profession'),
            'casque_actuel' => request('casque_actuel'),
            'magasin_application' => request('magasin_application'),
            'casque_futur' => request('casque_futur'),
            'utilisation_foyer' => request('utilisation_foyer'),
            'utilisation_bigscreen' => request('utilisation_bigscreen'),
            'point_image' => request('point_image'),
            'point_confort' => request('point_confort'),
            'point_connection' => request('point_connection'),
            'point_graphisme' => request('point_graphisme'),
            'point_audio' => request('point_audio'),
            'notification' => request('notification'),
            'invitation_ami' => request('invitation_ami'),
            'enregistrer_emission' => request('enregistrer_emission'),
            'jeux_exclusifs' => request('jeux_exclusifs'),
            'fonctionnalité_personnelle' => request('fonctionnalité_personnelle'),
        ]);

        $response->save();
        
        $user = \App\User::create([
            'link' => Str::random(15),
            ]);
        $user->save();
        
        $link = 'users.link'; 
        return view('front.validate_message', ['user' => $user]);

    }

    // Retourne la vue de la reponse faite par l'utilisateur
    public function show($link){
    
        // Requete utilisant le query builder, jointure de deux tables avec clause sql sur une
        // propriété dynamique 
        $data = DB::table('responses')              
                ->select('*')
                ->join('users', 'users.id', '=', 'responses.id')
                ->where('link', $link)
                ->first();

        return view('front.show', [
            'response' => $data,
        ]);

    }

}
