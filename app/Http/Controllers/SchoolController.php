<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolEditRequest;
use App\Models\Region;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;

class SchoolController extends Controller
{
    public function index()
    {
        $school = User::where('id', userConnect()->id)
            ->first();

        $regions = Region::where('province_id', $school->province_id)
            ->get();

        return view('school.profile.index', compact('school', 'regions'));
    }

    public function editSchool(SchoolEditRequest $request, $id)
    {
        $school = User::find($id);
        $school->name_school = $request['name_school'];
        $school->director1 = $request['director1'];
        $school->director2 = $request['director2'];
        $school->region_id = $request['region_id'];
        $school->address = $request['address'];
        $school->postal_code = $request['postal_code'];
        $school->phone_school = $request['phone_school'];
        $school->first_time_school = $request['first_time_school'];
        $school->sede = $request['sede'];
        $school->type = $request['type'];

        $school->save();

        toast('Los cambios se realizaron correctamente','success');
        return back();
    }
}
