<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribute extends Model
{
    use HasFactory;
    protected $table = 'distributes';
    protected $fillable=[
            'name',
            'nic',
            'add',
            'mobile',
            'mail',
            'gender',
            'tCode',
            'uName',
            'pass'
    ];
}
