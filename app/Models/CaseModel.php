<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CaseModel extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = [
        'name',
        'desciption',
    ];

    public $timestamps = true;


    public function prisoners(): BelongsToMany
    {
        return $this->belongsToMany(Prisoner::class, 'case_prisoner', 'case_id', 'prisoner_id');
    }

    public function cell_occupations(): HasMany
    {
        return $this->hasMany(CellOccupation::class);
    }
}
