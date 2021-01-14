<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $parent_id
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property TeamMembersCategory $teamMembersCategory
 * @property TeamMember[] $teamMembers
 * @method static create(array $array)
 */
class TeamMembersCategory extends Model
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
    protected $fillable = ['parent_id', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teamMembersCategory()
    {
        return $this->belongsTo('App\Models\TeamMembersCategory', 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teamMembers()
    {
        return $this->hasMany('App\Models\TeamMember', 'team_members_categories_id');
    }
}
