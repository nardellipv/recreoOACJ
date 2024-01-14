@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

<script>
  function show1(){
    document.getElementById('div1').style.display ='block';
  }
  function show2(){
    document.getElementById('div1').style.display = 'none';
  }
</script>
<style>
  .hide {
    display: none;
  }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="card radius-10">
            <div class="card-body">
                @include('errors.error')
                <form action="{{ route('teacher.upgrade', $teacher) }}" method="POST">
                    @csrf
                    <h5 class="mb-0 mt-4">Agregar Profesor</h5>
                    <hr>
                    <div class="row g-3">
                        <div class="col-4">
                            <label class="form-label">Nombre y Apellido</label>
                            <input type="text" class="form-control" name="name_teacher" value="{{ $teacher->name_teacher ,old('name_teacher') }}" placeholder="Ingrese el nombre y apellido" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label">DNI</label>
                            <input type="text" class="form-control" name="dni_teacher" value="{{ $teacher->dni_teacher ,old('dni_teacher') }}" placeholder="Ingresar DNI" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label">Teléfono </label>
                            <input type="text" class="form-control" name="phone_teacher" value="{{ $teacher->phone_teacher ,old('phone_teacher') }}" placeholder="Ingrese el teléfono">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Espacio Curricular</label>
                            <input type="text" class="form-control" name="space" value="{{ $teacher->space ,old('space') }}" placeholder="Ingrese el espacio curricular">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email_teacher" value="{{ $teacher->email_teacher ,old('email_teacher') }}" placeholder="Ingrese el email">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">Nivel</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="level_teacher1" value="1" name="level_teacher" {{ $teacher->level_teacher == 1 ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="level_teacher1">1</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="level_teacher2" value="2" name="level_teacher" {{ $teacher->level_teacher == 2 ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="level_teacher2">2</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="level_teacher3" value="3" name="level_teacher" {{ $teacher->level_teacher == 3 ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="level_teacher3">Ambos Niveles</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">¿Primera Vez que participa?</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="first_time_teacherSi" value="SI" name="first_time_teacher" {{ $teacher->first_time_teacher == 'SI' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="first_time_teacherSi">Si</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="first_time_teacherNo" value="NO" name="first_time_teacher" {{ $teacher->first_time_teacher == 'NO' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="first_time_teacherNo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">¿Participa en otro colegio?</label>
                                <input type="radio"  name="other_school" value="SI" class="form-check-input" required onclick="show1();" {{ $teacher->other_school == 'SI' ? 'checked' : '' }}>
                                <label class="form-check-label" >Si, participo en otro colegio</label>
                                <input type="radio" name="other_school" value="NO" class="form-check-input"  onclick="show2();" {{ $teacher->other_school == 'NO' ? 'checked' : '' }}>
                                <label class="form-check-label">No, solo en este colegio</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <div id="div1" class="form-group col-12 {{ $teacher->other_school == 'SI' ? 'show' : 'hide' }}">
                                    <label for="inputName">Nombre del colegio</label>
                                    <input type="text" class="form-control" id="inputName" name="name_school_teacher" value="{{ $teacher->name_school_teacher ,old('name_school_teacher') }}" placeholder="Nombre">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-start mt-3">
                        <button type="submit" class="btn btn-primary px-4">Agregar Profesor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2-custom.js') }}"></script>
    @endsection
