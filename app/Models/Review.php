<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_comment',
        'user_rating'
        
    ];
    public function users() {return $this->hasMany(User::class);}
    public function books() {return $this->hasMany(Book::class);}

}
