<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country_id', 'zip_code'];

    public function country(){
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
