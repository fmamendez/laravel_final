<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automotor extends Model
{
    use HasFactory;
    protected $table= 'autos';
    protected $fillable = ['titular_id','marca','modelo','patente','tipo'];
    public function titular() {
        return $this->belongsTo(Titular::class);
    }
    // public function infraccion(){
    //     return $this->hasMany(Infraccion::class);
    // }
}
