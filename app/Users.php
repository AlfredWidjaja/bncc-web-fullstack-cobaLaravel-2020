<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    // protected $primaryKey = 'id';
    // protected $keyType = "string";

    protected $fillable=[
        'id', 'nama', 'email', 'password'
    ];

    public function details(){
        return $this->hasMany(Pertanyaan::class, 'user_id', 'id');
    }
}
