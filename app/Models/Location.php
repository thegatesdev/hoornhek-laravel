z<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Location extends Model
    {
        use HasFactory;

        protected $fillable = [
            'address',
            'city',
            'cell_amount',
        ];

        public $timestamps = true;

        public function users(): HasMany
        {
            return $this->hasMany(User::class);
        }

        public function cell_occupations(): HasMany
        {
            return $this->hasMany(CellOccupation::class);
        }
    }
