<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $category_id
 * @property integer $level_id
 * @property string $job_description
 * @property string $skills_required
 * @property float $offered_salary
 * @property int $experience
 * @property integer $gender
 * @property string $industry
 * @property string $qualification
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 * @property Level $level
 * @method static create(array $array)
 */
class Vacancy extends Model
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
    protected $fillable = ['category_id', 'level_id', 'job_description', 'industry_id', 'qualification_id', 'skills_required', 'offered_salary',
        'experience', 'gender',  'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }
}
