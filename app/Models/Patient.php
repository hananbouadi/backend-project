<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
       'id_p', 'nom' ,'prenom' ,'age','email' ,'CIN','tel','address'
    ];
}
