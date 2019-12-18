<div class="card">
    <div class="card-header">Menu</div>

    <div class="card-body">

        <ul class="list-group nav nav-pills nav-stacked">
            
            @if (auth()->check())            
                <li class="list-group-item d-flex justify-content-between align-items-center 
                @if (request()->is('home')) active @endif">
                    <a href="home" style="color:#000000;">Dashboard</a>
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="home" style="color:#000000;">Ver Incidencias</a>
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center
                @if (request()->is('reportar')) active @endif">
                    <a href="/reportar" style="color:#000000;">Reportar Incidencias</a>
                    <span class="badge badge-primary badge-pill">1</span>
                </li>

                @if (auth::user()->is_admin)
                
                <li class="list-group-item d-flex justify-content-between align-items-center nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administracion</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/usuarios">Usuarios</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                @endif

            @else

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Bienvenido
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Instrucciones
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Creditos
                    <span class="badge badge-primary badge-pill">1</span>
                </li>


            @endif


        </ul>
    </div>

</div>

