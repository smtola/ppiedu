<?php

namespace App\Http\Controllers;

use App\Models\LibraryDepartment;
use Illuminate\Http\Request;

class LibraryDepartmentController extends Controller
{
    public function getSubjects(LibraryDepartment $department)
    {
        return response()->json($department->subjects()->with(['libraries'])->get());
    }
} 