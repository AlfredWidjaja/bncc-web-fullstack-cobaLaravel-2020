<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban_new';
    // protected $primaryKey = 'id';
    // protected $keyType = "string";

    protected $fillable=[
        'id', 'pertanyaan_id', 'isi', 'vote'
    ];

    public function task(){
        return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id', 'id');
    }

    public function details(){
        return $this->hasOne(Pertanyaan::class, 'jawaban_id', 'id');
    }
}
