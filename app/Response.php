<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    public function questions(){
        return $this->belongsTo(Question::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    // Liste les colonnes autorisés pour éviter les erreurs de 
    // MassAssignmentException
    protected $fillable = ['email', 'age', 'genre', 'foyer', 'profession', 'casque_actuel', 'magasin_application', 'casque_futur', 'utilisation_foyer', 'utilisation_bigscreen'];



    
}
