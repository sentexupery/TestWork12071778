<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\Student\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $student = Student::all();
        return StudentResource::collection($student);
    }
}
