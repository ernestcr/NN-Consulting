<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

/**
 * Class Permission (generated by Laratrust)
 *
 * @package App\Models
 */
class Permission extends LaratrustPermission
{
    /**
     * The primary key of the 'permissions' table associated with the Permission entity.
     *
     * @var string
     */
    protected $primaryKey = 'permission_id';

    /**
     * The restricted attributes for mass-assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Updates parent timestamps.
     *
     * @var array
     */
    protected $touches = ['roles'];
}