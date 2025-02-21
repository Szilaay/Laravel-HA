<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holdak extends Model
{
    protected $table = 'holdak';
    protected $primaryKey = 'holdak_id';

    public function bolygo()
    {
        return $this->belongsTo(Bolygok::class, 'bolygok_id', 'bolygok_id');
    }
}
