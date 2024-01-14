@extends('layouts.app')

@section('css')
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<h6 class="mb-0 text-uppercase">Ingreso de Notas</h6>
<hr />
<div class="card">
    <div class="card-body">
        @include('errors.error')
        <h6>Nota Colegial</h6>
        <div class="card color-table bg-success">
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Prueba Teórico-Práctica <small>(de 0 a {{ $note->first_note_max }} puntos)</small></th>
                            <th scope="col">Prueba Experimental <small>(de 0 a {{ $note->second_note_max }} puntos)</small></th>
                            <th scope="col">Nota Total</small></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <form action="{{ route('student.AddnotesColegial', $student) }}" method="POST">
                            @csrf
                            <tr>
                                <td>{{ $student->name_student }}</td>
                                <td><input class="form-control form-control-sm" name="first_note" value="{{ $student->first_note }}" type="text" placeholder="Ingresar nota Teórico-Práctica" style="width: 75%;margin-top: -3%;"></td>
                                @if($student->level_student == 2)
                                <td><input class="form-control form-control-sm" name="second_note" value="{{ $student->second_note }}" type="text" placeholder="Ingresar nota Experimental" style="width: 75%;margin-top: -3%;"></td>
                                @else
                                <td><input class="form-control form-control-sm" type="text" placeholder="No habilitado" disabled style="width: 75%;margin-top: -3%;"></td>
                                @endif
                                <td>{{ $student->total_note }}</td>
                                <td>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary"><i class="fadeIn animated bx bx-save"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h6>Nota Intercolegial</h6>
        <div class="card color-table bg-info">
            <div class="card-body">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Prueba Teórico-Práctica <small>(de 0 a {{ $note->first_note_max }} puntos)</small></th>
                            <th scope="col">Prueba Experimental <small>(de 0 a {{ $note->second_note_max }} puntos)</small></th>
                            <th scope="col">Nota Total</small></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <form action="{{ route('student.AddnotesInter', $student) }}" method="POST">
                            @csrf
                            <tr>
                                <td>{{ $student->name_student }}</td>
                                <td><input class="form-control form-control-sm" name="first_note_inter" value="{{ $student->first_note_inter }}" type="text" placeholder="Ingresar nota Teórico-Práctica" style="width: 75%;margin-top: -3%;"></td>
                                @if($student->level_student == 2)
                                <td><input class="form-control form-control-sm" name="second_note_inter" value="{{ $student->second_note_inter }}" type="text" placeholder="Ingresar nota Experimental" style="width: 75%;margin-top: -3%;"></td>
                                @else
                                <td><input class="form-control form-control-sm" type="text" placeholder="No habilitado" disabled style="width: 75%;margin-top: -3%;"></td>
                                @endif
                                <td>{{ $student->total_note_inter }}</td>
                                <td>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary"><i class="fadeIn animated bx bx-save"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/js/table-datatable.js"></script>
@endsection
