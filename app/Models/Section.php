<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name',
    ];

    /**
     * Get the user that owns the section.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the glossary terms for the section.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glossaryTerms(): HasMany
    {
        return $this->hasMany(GlossaryTerm::class);
    }
}
