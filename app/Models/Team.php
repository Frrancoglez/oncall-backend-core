<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'team';

    protected $fillable = [
        'name',
    ];

    public function engineers(){
        return $this->hasMany(Engineer::class, 'id_team');
    }

}
