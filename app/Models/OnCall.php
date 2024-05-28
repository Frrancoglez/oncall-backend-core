<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class OnCall extends Model
{
    use HasFactory;

    protected $table = 'oncall';

    protected $with = ['engineer'];

    protected $fillable = [
        'date',
        'id_type',
        'id_engineer'
    ];

    public function engineer(){
        return $this->belongsTo(Engineer::class, 'id_engineer');
    }
    
}
