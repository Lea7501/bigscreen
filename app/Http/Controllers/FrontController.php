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
        ]);

        // Permet de stocker les informations dans la BDD - la requête create correspond a un new + save
        $response = \App\Response::create([
            'email' => request('email'),
            'age' => request('age'),
            'genre' => request('genre')
        ]);
        
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
