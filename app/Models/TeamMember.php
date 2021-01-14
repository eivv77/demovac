<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $team_members_categories_id
 * @property string $name
 * @property string $position
 * @property string $stat
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property TeamMembersCategory $teamMembersCategory
 * @method static create(array $array)
 */
class TeamMember extends Model
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
    protected $fillable = ['team_members_categories_id', 'name', 'position', 'stat',
                            'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teamMembersCategory()
    {
        return $this->belongsTo('App\Models\TeamMembersCategory', 'team_members_categories_id');
    }
}
