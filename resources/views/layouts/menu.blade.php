<li class="nav-item">
    <a href="{{ route('usuarios.index') }}"
       class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">
        <p>Usuarios</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ganadorSorteos.index') }}"
       class="nav-link {{ Request::is('ganadorSorteos*') ? 'active' : '' }}">
        <p>Ganador Sorteos</p>
    </a>
</li>


