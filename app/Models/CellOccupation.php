<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CellOccupation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisoner_id',
        'cell',
        'location_id',
        'start_time',
        'end_time',
    ];

    public $timestamps = false;


    public function prisoner(): BelongsTo
    {
        return $this->belongsTo(Prisoner::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function case(): BelongsTo
    {
        return $this->belongsTo(CaseModel::class);
    }
}
