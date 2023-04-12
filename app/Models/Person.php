<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static count()
 * @method static join(string $string, string $string1, string $string2, string $string3)
 * @method static whereBetween(string $string, int[] $array)
 */
class Person extends Model
{
    protected $table = 'Person';
    use HasFactory;
}
