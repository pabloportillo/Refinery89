<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentUser;
use App\Models\User;
use App\Models\Department;

class DepartmentUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departmentUsers = DepartmentUser::all();
        return view('department_users.index', compact('departmentUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $departments = Department::all();
        
        return view('department_users.create', compact('users', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DepartmentUser::create($request->all());
        return redirect()->route('department_users.index')
            ->with('success', 'Department user assigned successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departmentUser = DepartmentUser::find($id);
        return view('department_users.show', compact('departmentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $department_user = DepartmentUser::find($id);
        $users = User::all();
        $departments = Department::all();
        return view('department_users.edit', compact('users', 'departments', 'department_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departmentUser = DepartmentUser::find($id);
        $departmentUser->update($request->all());
        return redirect()->route('department_users.index')
            ->with('success', 'Department user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DepartmentUser::destroy($id);
        return redirect()->route('department_users.index')
            ->with('success', 'Department user deleted successfully');
    }
}
