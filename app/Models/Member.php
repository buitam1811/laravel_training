<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if($filters['id'] ?? false) {
            $query->where('id', '=', request('id'));
        }

        if($filters['phone'] ?? false) {
            $query->whereRelation('phone', 'number', '=', request('phone'));
        }

        if($filters['role'] ?? false) {
            $query->whereRelation('roles', 'name', '=', request('role'));
        }
    }

    public function phone() {
        return $this->hasOne(Phone::class);
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'role_member');
    }
}
