<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_hobbies', 'hobby_id', 'user_id');
    }
}
