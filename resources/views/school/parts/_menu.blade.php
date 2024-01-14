<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon-2.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Fobia</h4>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Menú Principal</li>
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-chalkboard"></i>
                </div>
                <div class="menu-title">Panel Principal</div>
            </a>
        </li>
        <li class="menu-label">Datos</li>
        <li>
            <a href="{{ route('school.index') }}">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-building"></i>
                </div>
                <div class="menu-title">Colegio</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-pencil"></i>
                </div>
                <div class="menu-title">Profesores</div>
            </a>
            <ul>
                <li><a href="{{ route('teacher.index') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Listado Profesores
                    </a>
                </li>
                <li>
                    @if($registerTeacher->status_button == 1)
                    <a href="{{ route('teacher.add') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Agregar Profesor
                    </a>
                </li>
                @endif
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-book"></i>
                </div>
                <div class="menu-title">Estudiantes</div>
            </a>
            <ul>
                <li><a href="{{ route('student.index') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Listado Estudiantes
                    </a>
                </li>
                <li>
                    @if($registerNoteColegial->status_button == 1)
                    <a href="{{ route('student.notes') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Subir Notas
                    </a>
                    @endif
                </li>
                <li>
                    @if($registerStudent->status_button == 1)
                    <a href="{{ route('student.add') }}">
                        <ion-icon name="ellipse-outline"></ion-icon>Agregar Estudiante
                    </a>
                </li>
                @endif
            </ul>
        </li>
        <li class="menu-label">Salir</li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-exit"></i>
                </div>
                <div class="menu-title">Cerrar Sesión</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
