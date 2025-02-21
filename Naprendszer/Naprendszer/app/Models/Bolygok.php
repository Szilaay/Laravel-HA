<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bolygok extends Model
{
    protected $table = 'bolygok';
    protected $primaryKey = 'bolygok_id';

    public function holdak()
    {
        return $this->hasMany(Holdak::class, 'bolygok_id', 'bolygok_id');
    }
}