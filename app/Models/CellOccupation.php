<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class CellOccupation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisoner_id',
        'cell',
        'location_id',
        'start_time',
        'end_time',
        'case_prisoner_id',
    ];

    public $timestamps = false;


    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function case(): HasOneThrough
    {
        return $this->hasOneThrough(CaseModel::class, 'case_prisoner', 'case_id');
    }
}
