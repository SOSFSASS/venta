<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="submenu-open">
                <h6 class="submenu-hdr">Menu</h6>
                <ul>
                    <li>
                        <a class="{{ setActive('Panel') }}" href="{{ route('panel') }}"><i
                                data-feather="grid"></i><span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="submenu-open">
                <h6 class="submenu-hdr">Mantenimiento</h6>
                <ul>
                    <li><a class="{{ setActive('Categoria') }}" href="{{ route('categoria.index') }}"><i
                                data-feather="codepen"></i><span>Categoria</span></a></li>

                    <li><a class="{{ setActive('Producto') }}" href="{{ route('producto.index') }}"><i
                                data-feather="box"></i><span>Productos</span></a></li>
                </ul>
            </li>
            <li class="submenu-open">
                <h6 class="submenu-hdr">Clientes</h6>
                <ul>
                    <li>
                        <a class="{{ setActive('Cliente') }}" href="{{ route('cliente.index') }}"><i data-feather="users"></i><span>Registro de Clientes</span></a>
                    </li>
                </ul>
            </li>
            <li class="submenu-open">
                <h6 class="submenu-hdr">Ventas</h6>
                <ul>
                    <li><a class="{{ setActive('pos') }}" href="{{ route('pos') }}"><i
                                data-feather="hard-drive"></i><span>POS</span></a></li>
                    <li><a href=""><i data-feather="shopping-cart"></i><span>Registro de ventas</span></a></li>
                    <li><a href=""><i data-feather="file-text"></i><span>Facturas</span></a></li>
                </ul>
            </li>
            <li class="submenu-open">
                <h6 class="submenu-hdr">Promociones</h6>
                <ul>
                    <li><a href=""><i data-feather="shopping-cart"></i><span>Cupones</span></a></li>
                </ul>
            </li>

            <li class="submenu-open">
                <h6 class="submenu-hdr">Clientes</h6>
                <ul>
                    <a href=""><i data-feather="users"></i><span>Registro de Clientes</span></a>
            </li>

        </ul>
       
        <li class="submenu-open">
            <h6 class="submenu-hdr">Compras</h6>
            <ul>
                <li><a href=""><i data-feather="user"></i><span>Proveedores</span></a></li>

            </ul>
        </li>

        <li class="submenu-open">
            <h6 class="submenu-hdr">Administración</h6>
            <ul>
                <li><a href=""><i data-feather="user-check"></i><span>Usuarios</span></a></li>
                <li><a href=""><i data-feather="shield"></i><span>Roles</span></a></li>
                <li><a href=""><i data-feather="lock"></i><span>Configuración</span></a></li>
            </ul>
        </li>

        <li class="submenu-open">
            <h6 class="submenu-hdr">Ayuda</h6>
            <ul>
                <li><a href="javascript:void(0);"><i data-feather="file-text"></i><span>Sobre el sistema</span></a>
                </li>

            </ul>
        </li>
        </ul>
    </div>
</div>
