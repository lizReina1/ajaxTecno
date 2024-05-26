<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('home') }}">
            <span class="align-middle">FisioSport</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="#">
                    <i class="fa fa-house"></i>
                    <span class="align-middle">Dashboards</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#rutinas" data-bs-toggle="collapse" class="sidebar-link collapsed"
                    aria-expanded="false">
                    <i class="fa-solid fa-dumbbell"></i>
                    <span class="align-middle">Rutinas</span>
                </a>
                <ul id="rutinas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"
                    style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('martillo') }}">Ejercicio 1</a></li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a data-bs-target="#notifications" data-bs-toggle="collapse" class="sidebar-link collapsed"
                    aria-expanded="false">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="align-middle">Notificaciones</span>
                </a>
                <ul id="notifications" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"
                    style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('crear_notificacion') }}">Crear
                            notificación</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ver_notificaciones') }}">Ver
                            notificaciones</a></li>
                </ul>
            </li>

            <!--   <li class="sidebar-header">
                Plugins &amp; Addons
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-file-lines"></i>
                    <span class="align-middle">Form Plugins</span>
                </a>
                <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Advanced
                            Inputs <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Editors <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Validation <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-table-list"></i>
                    <span class="align-middle">DataTables</span>
                </a>
                <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Responsive Table <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Table with
                            Buttons <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Column Search <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Fixed
                            Header <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Multi
                            Selection <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Ajax Sourced
                            Data <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-chart-column"></i>
                    <span class="align-middle">Charts</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Chart.js</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">ApexCharts <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</nav>
