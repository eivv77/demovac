<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $vacancy_id
 * @property string $path
 * @property string $email
 * @property int $phone_number
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property Vacancy $vacancy
 */
class VacancyApply extends Model
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
    protected $fillable = ['vacancy_id', 'path', 'email', 'phone_number', 'message', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vacancy()
    {
        return $this->belongsTo('App\Models\Vacancy');
    }
}
