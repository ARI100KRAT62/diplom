<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int    $id
 * @property string $name
 * @property int    $typeId
 * @property string $description
 * @property int    $countryId
 * @property float  $price
 * @property string $sku
 * @property string $specifications
 */
class Part extends Model
{
    use HasFactory;

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
