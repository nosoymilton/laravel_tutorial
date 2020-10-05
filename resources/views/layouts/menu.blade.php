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

<li class="{{ Request::is('editoriales*') ? 'active' : '' }}">
    <a href="{{ route('editoriales.index') }}"><i class="fa fa-edit"></i><span>Editoriales</span></a>
</li>

<li class="{{ Request::is('idiomas*') ? 'active' : '' }}">
    <a href="{{ route('idiomas.index') }}"><i class="fa fa-edit"></i><span>Idiomas</span></a>
</li>

<li class="{{ Request::is('autores*') ? 'active' : '' }}">
    <a href="{{ route('autores.index') }}"><i class="fa fa-edit"></i><span>Autores</span></a>
</li>

<li class="{{ Request::is('ejemplares*') ? 'active' : '' }}">
    <a href="{{ route('ejemplares.index') }}"><i class="fa fa-edit"></i><span>Ejemplares</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

{{--Bloquear segun roles y perfiles
    <li class="{{ Request::is('categoriasHasLibros*') ? 'active' : '' }}">
    <a href="{{ route('categoriasHasLibros.index') }}"><i class="fa fa-edit"></i><span>Categorias Has Libros</span></a>
</li>--}}
{{--<li class="{{ Request::is('autoresHasLibros*') ? 'active' : '' }}">
    <a href="{{ route('autoresHasLibros.index') }}"><i class="fa fa-edit"></i><span>Autores Has Libros</span></a>
</li>--}}

