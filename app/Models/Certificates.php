<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificates
 * @package App\Models
 */
class Certificates extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'certificates';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'path',
        'position',
        'is_active'
    ];
}
