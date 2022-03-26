<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Student $student)
    {
        $student->delete();
        return response([]);
    }
}
