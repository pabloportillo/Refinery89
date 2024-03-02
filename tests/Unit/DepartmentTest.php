<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase; 
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Department;
use Tests\TestCase;
use Database\Factories\DepartmentFactory;

class DepartmentTest extends TestCase
{
    use RefreshDatabase; 

    public function test_can_create_department()
    {
        $departmentData = [
            'name' => 'Test Department',
        ];

        $department = Department::create($departmentData);

        $this->assertInstanceOf(Department::class, $department);
        $this->assertEquals('Test Department', $department->name);
    }

    public function test_can_update_department()
    {
        $department = Department::factory()->create();

        $updatedData = [
            'name' => 'Updated Department Name',
        ];

        $department->update($updatedData);

        $this->assertEquals('Updated Department Name', $department->fresh()->name);
    }

    public function test_can_delete_department()
    {
        $department = Department::factory()->create();

        $department->delete();

        $this->assertDeleted($department);
    }

    public function test_can_retrieve_department()
    {
        $department = Department::factory()->create();

        $retrievedDepartment = Department::find($department->id);

        $this->assertEquals($department->name, $retrievedDepartment->name);
    }

}
