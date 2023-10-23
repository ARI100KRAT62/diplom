<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int    $id
 * @property string $name
 */
class Country extends Model
{
    use HasFactory;

    public function parts(): HasMany
    {
        return $this->hasMany(Part::class);
    }
}
