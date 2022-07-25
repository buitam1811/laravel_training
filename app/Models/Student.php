<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if($filters['id'] ?? false) {
            $query->where('id', '=', request('id'));
        }

        if($filters['name'] ?? false) {
            $query->where('name', 'like', '%' . request('name') . '%');
        }

        if($filters['class'] ?? false) {
            $query->where('class', 'like', '%' . request('class') . '%');
        }
    }
}
