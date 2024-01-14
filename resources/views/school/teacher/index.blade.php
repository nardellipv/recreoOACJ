@extends('layouts.app')

@section('css')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<h6 class="mb-0 text-uppercase">Listado de Profesores</h6>
<hr />
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre y Apellido</th>
                        <th>DNI</th>
                        <th>Espacio</th>
                        <th>Nivel</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->name_teacher }}</td>
                        <td>{{ $teacher->dni_teacher }}</td>
                        <td>{{ Str::limit($teacher->space,35) }}</td>
                        <td>
                            @if($teacher->level_teacher != 3)
                            {{ $teacher->level_teacher }}
                            @else
                            <p>Ambos Niveles</p>
                            @endif
                        </td>
                        <td>{{ $teacher->phone_teacher }}</td>
                        <td>{{ $teacher->email_teacher }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('teacher.update', $teacher) }}" type="button" class="btn btn-primary"><i class="fadeIn animated bx bx-edit-alt"></i></a>
                                <a href="{{ route('teacher.delete', $teacher) }}" type="button" class="btn btn-danger"><i class="fadeIn animated bx bx-trash"></i></a>
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
