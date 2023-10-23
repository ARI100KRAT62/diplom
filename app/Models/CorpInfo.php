<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $name
 */
class CorpInfo extends Model
{
    use HasFactory;
}
