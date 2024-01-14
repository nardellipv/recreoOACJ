<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddNoteStudentRequest;
use App\Http\Requests\AddStudentRequest;
use App\Models\Setting;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $note;
    public function __construct()
    {
        $this->note = Setting::where('id', 5)->first();
    }
    public function indexStudent()
    {
        $students = Student::where('user_id', userConnect()->id)
            ->get();

        return view('school.student.index', compact('students'));
    }
    public function notesStudent()
    {
        $students = Student::where('user_id', userConnect()->id)
            ->get();

        $note = $this->note;

        return view('school.student.notes', compact('students', 'note'));
    }

    public function notesColegialAddStudent(AddNoteStudentRequest $request, $id)
    {
        $student = Student::find($id);

        if ($request->first_note > $this->note->first_note_max) {
            alert()->error('Error ingresar nota', 'La nota máxima de Prueba Teórico-Práctica debe ser ' .$this->note->first_note_max, 'error');
            return back();
        }

        if ($request->second_note > $this->note->second_note_max) {
            alert()->error('Error ingresar nota', 'La nota máxima de Prueba Experimental debe ser ' .$this->note->second_note_max, 'error');
            return back();
        }

        $student->first_note = $request['first_note'];
        $student->second_note = $request['second_note'];
        $student->save();

        if ($student->level_student == 1) {
            $student->total_note = $request['first_note'];
            $student->save();
        } else {
            $studentTotal = $request['first_note'] + $request['second_note'];
            $student->total_note = $studentTotal;
            $student->save();
        }

        toast('Nota del alumno ' . $student->name_student . ' fue guardada correctamente', 'success');
        return back();
    }

    public function notesInterAddStudent(AddNoteStudentRequest $request, $id)
    {
        $student = Student::find($id);

        if ($request->first_note_inter > $this->note->first_note_max) {
            alert()->error('Error ingresar nota', 'La nota máxima de Prueba Teórico-Práctica debe ser ' .$this->note->first_note_max, 'error');
            return back();
        }

        if ($request->second_note_inter > $this->note->second_note_max) {
            alert()->error('Error ingresar nota', 'La nota máxima de Prueba Experimental debe ser ' .$this->note->second_note_max, 'error');
            return back();
        }

        $student->first_note_inter = $request['first_note_inter'];
        $student->second_note_inter = $request['second_note_inter'];
        $student->save();

        if ($student->level_student == 1) {
            $student->total_note_inter = $request['first_note_inter'];
            $student->save();
        } else {
            $studentTotal = $request['first_note_inter'] + $request['second_note_inter'];
            $student->total_note_inter = $studentTotal;
            $student->save();
        }

        toast('Nota del alumno ' . $student->name_student . ' fue guardada correctamente', 'success');
        return back();
    }

    public function addStudent()
    {
        return view('school.student.add');
    }

    public function storeStudent(AddStudentRequest $request)
    {
        $student = Student::create([
            'name_student' => $request['name_student'],
            'dni_student' => $request['dni_student'],
            'birth_date' => $request['birth_date'],
            'genre' => $request['genre'],
            'phone_student' => $request['phone_student'],
            'email_student' => $request['email_student'],
            'classroom' => $request['classroom'],
            'level_student' => $request['level_student'],
            'first_time_student' => $request['first_time_student'],
            'user_id' => userConnect()->id,
        ]);

        toast('El estudiante ' . $student->name_student . ' fue agregado correctamente', 'success');
        return back();
    }

    public function updateStudent($id)
    {
        $student = Student::find($id);

        return view('school.student.edit', compact('student'));
    }

    public function upgradeStudent(AddStudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->name_student = $request['name_student'];
        $student->dni_student = $request['dni_student'];
        $student->birth_date = $request['birth_date'];
        $student->genre = $request['genre'];
        $student->phone_student = $request['phone_student'];
        $student->email_student = $request['email_student'];
        $student->classroom = $request['classroom'];
        $student->level_student = $request['level_student'];
        $student->first_time_student = $request['first_time_student'];
        $student->save();

        toast('El estudiante ' . $student->name_student . ' fue actualizado correctamente', 'success');
        return redirect()->route('student.index');
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();

        toast('El estudiante fue eliminado correctamente', 'success');
        return back();
    }
}
