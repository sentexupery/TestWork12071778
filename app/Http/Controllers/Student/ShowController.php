<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\Student\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Student $student)
    {
        return new StudentResource($student);
    }
}
