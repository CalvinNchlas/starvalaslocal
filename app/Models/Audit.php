<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Audit extends Model
{
    protected $guarded = [];

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];

    public function causer(): MorphTo
    {
        return $this->morphTo();
    }

    public function auditable(): MorphTo
    {
        return $this->morphTo();
    }
}
