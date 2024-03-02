<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentUser extends Model
{
    use HasFactory;

    protected $table = 'department_user'; // Nombre de la tabla pivot

    protected $fillable = [
        'user_id',
        'department_id',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public static function assign(int $userId, int $departmentId)
    {
        return DepartmentUser::create([
            'user_id' => $userId,
            'department_id' => $departmentId,
        ]);
    }

    /**
     * Remove the user from a department.
     *
     * @param int $userId
     * @param int $departmentId
     * @return bool
     */
    public static function remove(int $userId, int $departmentId)
    {
        return DepartmentUser::where('user_id', $userId)
            ->where('department_id', $departmentId)
            ->delete();
    }    
    
}
