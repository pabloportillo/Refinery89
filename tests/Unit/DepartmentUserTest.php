<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Department;
use App\Models\User;
use App\Models\DepartmentUser;

class DepartmentUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_be_assigned_to_department()
    {
        $user = User::factory()->create();
        $department = Department::factory()->create();

        DepartmentUser::assign($user->id, $department->id);

        $this->assertTrue($user->departments->contains($department));
    }

    /** @test */
    public function user_can_be_removed_from_department()
    {
        $user = User::factory()->create();
        $department = Department::factory()->create();
        DepartmentUser::assign($user->id, $department->id);

        DepartmentUser::remove($user->id, $department->id);

        $this->assertFalse($user->departments->contains($department));
    }

}
