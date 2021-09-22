<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table="employees";
    protected $fillable=['anrede', 'vorname', 'nachname', 'email', 'handy', 'telefon', 'firma'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'firma');
    }
}
