<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function indexTeacher()
    {
        $teachers = Teacher::where('user_id', userConnect()->id)
            ->get();

        return view('school.teacher.index', compact('teachers'));
    }

    public function addTeacher()
    {
        return view('school.teacher.add');
    }

    public function storeTeacher(AddTeacherRequest $request)
    {
        $teacher = Teacher::create([
            'name_teacher' => $request['name_teacher'],
            'dni_teacher' => $request['dni_teacher'],
            'space' => $request['space'],
            'level_teacher' => $request['level_teacher'],
            'other_school' => $request['other_school'],
            'name_school_teacher' => $request['name_school_teacher'],
            'phone_teacher' => $request['phone_teacher'],
            'email_teacher' => $request['email_teacher'],
            'first_time_teacher' => $request['first_time_teacher'],
            'user_id' => userConnect()->id,
        ]);

        toast('El profesor ' . $teacher->name_teacher . ' se agrego correctamente', 'success');
        return back();
    }

    public function updateTeacher($id)
    {
        $teacher = Teacher::find($id);

        return view('school.teacher.edit', compact('teacher'));
    }

    public function upgradeTeacher(AddTeacherRequest $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name_teacher = $request['name_teacher'];
        $teacher->dni_teacher = $request['dni_teacher'];
        $teacher->space = $request['space'];
        $teacher->level_teacher = $request['level_teacher'];
        $teacher->other_school = $request['other_school'];
        $teacher->name_school_teacher = $request['name_school_teacher'];
        $teacher->phone_teacher = $request['phone_teacher'];
        $teacher->email_teacher = $request['email_teacher'];
        $teacher->first_time_teacher = $request['first_time_teacher'];
        $teacher->save();

        toast('El profesor ' . $teacher->name_teacher . ' fue actualizado correctamente', 'success');
        return redirect()->route('teacher.index');
    }

    public function deleteTeacher($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        toast('El profesor fue eliminado correctamente', 'success');
        return redirect()->route('teacher.index');
    }
}
