<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Student $student)
    {
        $data = $request->validated();
        $student->update($data);
        return response([]);
    }
}
