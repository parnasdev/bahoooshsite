<?php

namespace App\Models\Traits;

use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait UseACL
{
    public function role() : BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->role->contains('name', $role);
        }

//        foreach ($role as $r)
//        {
//            if ($this->hasRole($r->name)){
//                return true;
//            }
//        }
//        return false;

        return !!$role->where('name', $this->role->name)->count();
    }
}
