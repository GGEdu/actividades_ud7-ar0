<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;
    public function activity():BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_objectives')
                    ->withPivot('improvements', 'highlights')
                    ->withTimestamps();
    }
}
