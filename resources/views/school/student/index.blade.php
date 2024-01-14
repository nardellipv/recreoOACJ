@extends('layouts.app')

@section('css')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<h6 class="mb-0 text-uppercase">Listado de Estudiantes</h6>
<hr />
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre y Apellido</th>
                        <th>Teléfono</th>
                        <th>Nivel</th>
                        <th>Total Colegial</th>
                        <th>Total Intercolegial</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name_student }}</td>
                        <td>{{ $student->phone_student }}</td>
                        <td>{{ $student->level_student }}</td>
                        <td>{{ $student->total_note }}</td>
                        <td>{{ $student->total_note_inter }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('student.update', $student) }}" type="button" class="btn btn-primary"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                                <a href="{{ route('student.delete', $student) }}" type="button" class="btn btn-danger"><i class="fadeIn animated bx bx-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/js/table-datatable.js"></script>
@endsection
