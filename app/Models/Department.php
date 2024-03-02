<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Department::class, 'parent_id');
    }

    /**
     * La relación para obtener los usuarios asignados a este departamento.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'department_user');
    }

}
