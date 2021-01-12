<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactUs
 * @package App\Models
 */
class ContactUs extends Model
{
    /**
     * @var string
     */
    protected $table = "contact_us";

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'message'
    ];


}
