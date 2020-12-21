<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lend extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_from',
        'date_to'
        
    ];
    public function users() {return $this->hasMany(User::class);}
    public function books() {return $this->hasMany(Book::class);}
}
