<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engineer extends Model
{
    use HasFactory;

    protected $table = 'engineer';

    protected $fillable = [
        'name',
        'phone',
        'mail',
        'id_team'
    ];

    public function turnos(){
        return $this->hasMany(Oncall::class, 'id_engineer');
    }

    public function team(){
        return $this->belongsTo(Team::class, 'id_team');
    }

    
}
