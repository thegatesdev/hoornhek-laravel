<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'bsn',
        'address',
        'city',
        'date_of_birth',
        'place_of_birth',
    ];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
