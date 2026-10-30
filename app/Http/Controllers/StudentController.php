<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        return 'All Students';
    }

    public function show($id)
    {
        return 'Student ID: ' . $id;
    }

    public function create()
    {
        return 'Create Student Form';
    }

    public function store()
    {
        return 'Student Created Successfully';
    }

    public function update($id)
    {
        return 'Student ' . $id . ' Updated Successfully';
    }

    public function destroy($id)
    {
        return 'Student ' . $id . ' Deleted Successfully';
    }
}
