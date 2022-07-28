<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    use HasFactory;
    protected $table = 'territorys';
    protected $fillable=[
        'id','zCode','rCode','tCode','tName'
    ];
}
