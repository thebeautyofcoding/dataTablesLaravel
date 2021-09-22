<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable=['name', 'unterzeile', 'strasse', 'hausnummer', 'plz', 'ort', 'web', 'fax', 'telefon'];
   
    public function person(){
        return $this->hasMany('App\Models\Person', 'firma');

    }
}
