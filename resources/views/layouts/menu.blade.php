@canany(['view_books','delete_books','create_books','edit_books'])
<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{{ route('books.index') }}"><i class="fa fa-edit"></i><span>Catálogo</span></a>
</li>
@endcan
@canany(['view_users','create_users','edit_users','delete_users'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>
@endcan
@canany(['view_roles','create_roles','edit_roles','delete_roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endcan

<li class="{{ Request::is('libros*') ? 'active' : '' }}">
    <a href="{{ route('libros.index') }}"><i class="fa fa-edit"></i><span>Libros</span></a>
</li>

<li class="{{ Request::is('ejemplares*') ? 'active' : '' }}">
    <a href="{{ route('ejemplares.index') }}"><i class="fa fa-edit"></i><span>Ejemplares</span></a>
</li>

