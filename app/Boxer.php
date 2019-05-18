<?php

namespace App;

use App\Type;
use Illuminate\Database\Eloquent\Model;

class Boxer extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'sex', 'birth_date', 'comment', 
        'phone', 'parent_phone', 'parent_name','weight', 'adress'
    ];

    
    protected $dates = ['birth_date'];
    
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    // return age of the user
    public function age()
    {
        return $this->birth_date->age;
    }

}
