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
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <h5 class="mb-0 mt-4">Agregar Estudiante</h5>
                    <hr>
                    <div class="row g-3">
                        <div class="col-4">
                            <label class="form-label">Nombre y Apellido</label>
                            <input type="text" class="form-control" name="name_student" value="{{ old('name_student') }}" placeholder="Ingrese el nombre y apellido" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label">DNI</label>
                            <input type="text" class="form-control" name="dni_student" value="{{ old('dni_student') }}" placeholder="Ingresar DNI" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label">Teléfono </label>
                            <input type="text" class="form-control" name="phone_student" value="{{ old('phone_student') }}" placeholder="Ingrese el teléfono">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email_student" value="{{ old('email_student') }}" placeholder="Ingrese el email">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">Nivel</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="level_student1" value="1" name="level_student" required>
                                    <label class="form-check-label" for="level_student1">1</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="level_student2" value="2" name="level_student" required>
                                    <label class="form-check-label" for="level_student2">2</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">¿Primera Vez que participa?</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="first_time_studentSi" value="SI" name="first_time_student" required>
                                    <label class="form-check-label" for="first_time_studentSi">Si</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="first_time_studentNo" value="NO" name="first_time_student" required>
                                    <label class="form-check-label" for="first_time_studentNo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">Género</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="genreM" value="MASCULINO" name="genre" required>
                                    <label class="form-check-label" for="genreM">Masculino</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="genreF" value="FEMENINO" name="genre" required>
                                    <label class="form-check-label" for="genreF">Femenino</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">Nivel de estudio</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="classroomP" value="PRIMARIA" name="classroom" required>
                                    <label class="form-check-label" for="classroomP">Primaria</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="classroomS" value="SECUNDARIA" name="classroom" required>
                                    <label class="form-check-label" for="classroomS">Secundaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-start mt-3">
                        <button type="submit" class="btn btn-primary px-4">Agregar Estudiante</button>
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
