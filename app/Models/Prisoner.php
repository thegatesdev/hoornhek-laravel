<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        "bsn",
        "name",
        "address",
        "city",
    ];

    public function cases() {
        return null;//$this->hasMany(Case::class);
    }

    public function cell() {
        return null; //return $this->belongsTo(Cell::class);
    }

    public function profile() {
        return $this->hasOne(Profile::class);
    }
}
