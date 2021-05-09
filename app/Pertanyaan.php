<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan_final';
    // protected $primaryKey = 'id';
    // protected $keyType = "string";

    protected $fillable=[
        'id', 'user_id', 'tag_id', 'jawaban_id', 'judul', 'isi', 'vote', 'jawaban_terbaik'
    ];

    public function task(){
        return $this->belongsTo(Users::class, 'user_id', 'id');
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
        return $this->belongsTo(Jawaban::class, 'jawaban_id', 'id');
    }

    public function details(){
        return $this->hasMany(Jawaban::class, 'pertanyaan_id', 'id');
        return $this->hasMany(Tag::class, 'pertanyaan_id', 'id');
    }

}
