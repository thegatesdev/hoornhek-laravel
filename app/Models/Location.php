<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'cell_amount',
    ];

    public $timestamps = true;

    public function users() {
        return $this->hasMany(User::class);
    }
}