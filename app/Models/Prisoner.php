<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function cell()
    {
        return null; //return $this->belongsTo(Cell::class);
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
