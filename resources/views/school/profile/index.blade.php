@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="card radius-10">
            <div class="card-body">
                @include('errors.error')
                <form action="{{ route('school.edit', $school) }}" method="POST">
                    @csrf
                    <h5 class="mb-0 mt-4">Perfil Colegio</h5>
                    <hr>
                    <div class="row g-3">
                        <div class="col-6">
                            <label class="form-label">Nombre Colegio</label>
                            <input type="text" class="form-control" name="name_school" value="{{ $school->name_school, old('name_school') }}" placeholder="Ingrese el nombre">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $school->email }}" disabled>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Director</label>
                            <input type="text" class="form-control" name="director1" value="{{ $school->director1, old('director1') }}" placeholder="Ingrese el director">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Vice Director <small>Completar en caso de tenerlo</small></label>
                            <input type="text" class="form-control" name="director2" value="{{ $school->director2, old('director2') }}" placeholder="Ingrese el vice director">
                        </div>

                        <div class="col-6">
                            <label class="form-label">Localidad</label>
                            <select class="form-select" name="region_id" id="single-select-field" required>
                                @if(!empty($school->region->name))
                                <option value="{{ $school->id }}">{{ $school->region->name }}</option>
                                <option disabled>----------------</option>
                                @else
                                <option value="">Seleccione una localidad</option>
                                <option disabled>----------------</option>
                                @foreach ($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="col-6">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="address" value="{{ $school->address, old('address') }}" placeholder="Ingrese la Dicección">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-6">
                            <label class="form-label">Código Postal</label>
                            <input type="text" class="form-control" name="postal_code" value="{{ $school->postal_code, old('postal_code') }}" placeholder="Ingrese el código postal">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="phone_school" value="{{ $school->phone_school, old('phone_school') }}" placeholder="Ingrese el teléfono">
                        </div>
                        <div class="col-4">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">¿Primera vez?</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="first_time_school1" value="SI" name="first_time_school" {{ $school->first_time_school == 'SI' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="first_time_school1">Si</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="first_time_school2" value="NO" name="first_time_school" {{ $school->first_time_school == 'NO' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="first_time_school2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">¿Quiere ser SEDE?</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="sede1" value="SI" name="sede" {{ $school->sede == 'SI' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="sede1">Si</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="sede2" value="NO" name="sede" {{ $school->sede == 'NO' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="sede2">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="d-flex align-items-center gap-3">
                                <label class="form-label">¿Tipo de Gestión?</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="type1" value="PRIVADA" name="type" {{ $school->type == 'PRIVADA' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="type1">Privada</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="type2" value="PUBLICA" name="type" {{ $school->type == 'PUBLICA' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="type2">Pública</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-start mt-3">
                        <button type="submit" class="btn btn-primary px-4">Guardar Cambios</button>
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
