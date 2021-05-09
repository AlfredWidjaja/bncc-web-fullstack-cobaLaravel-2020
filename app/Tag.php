<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    // protected $primaryKey = 'id';
    // protected $keyType = "string";

    protected $fillable=[
        'id', 'pertanyaan_id', 'kategori'
    ];

    public function details(){
        return $this->hasMany(Pertanyaan::class, 'tag_id', 'id');
    }
}
