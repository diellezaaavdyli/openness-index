<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use SoftDeletes;
    use HasFactory;

    /**
     * Get the institutions for the users.
     */
    public function institutions()
    {
        return $this->hasMany('App\Models\Institutions');
    }

    protected $dates = [
        'deleted_at'
    ];
}