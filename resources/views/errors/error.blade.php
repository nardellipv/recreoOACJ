@if (count($errors) > 0)
<div class="card-body">
    <div class="alert alert-dismissible fade show py-2 border-0 border-start border-4 border-warning">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-warning"><i class="fadeIn animated bx bx-error-alt"></i>
            </div>
            <div class="ms-3">
                <div class="text-warning">¡Por favor corrija los siguiente errores!</div>
            </div>
        </div>
        <div class="ms-3">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-danger list-unstyled"><i class="fadeIn animated bx bx-right-arrow-circle"></i>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif

