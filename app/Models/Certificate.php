<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property int $position
 * @property boolean $is_active
 * @property string $created_at
 * @property string $updated_at
 */
class Certificate extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'path', 'position', 'is_active', 'created_at', 'updated_at'];

}
