@canany(['ver_roles','crear_roles','editar_roles','eliminar_roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endcan
@canany(['ver_usuarios','crear_usuarios','editar_usuarios','eliminar_usuarios'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>
@endcan
@canany(['ver_libros','crear_libros','editar_libros','eliminar_libros'])
<li class="{{ Request::is('libros*') ? 'active' : '' }}">
    <a href="{{ route('libros.index') }}"><i class="fa fa-edit"></i><span>Libros</span></a>
</li>
@endcan
{{--<li class="{{ Request::is('ejemplares*') ? 'active' : '' }}">
    <a href="{{ route('ejemplares.index') }}"><i class="fa fa-edit"></i><span>Ejemplares</span></a>
</li>--}}
@canany(['ver_autores','crear_autores','editar_autores','eliminar_autores'])
<li class="{{ Request::is('autores*') ? 'active' : '' }}">
    <a href="{{ route('autores.index') }}"><i class="fa fa-edit"></i><span>Autores</span></a>
</li>
@endcan
@canany(['ver_editoriales','crear_editoriales','editar_editoriales','eliminar_editoriales'])
<li class="{{ Request::is('editoriales*') ? 'active' : '' }}">
    <a href="{{ route('editoriales.index') }}"><i class="fa fa-edit"></i><span>Editoriales</span></a>
</li>
@endcan
@canany(['ver_idiomas','crear_idiomas','editar_idiomas','eliminar_idiomas'])
<li class="{{ Request::is('idiomas*') ? 'active' : '' }}">
    <a href="{{ route('idiomas.index') }}"><i class="fa fa-edit"></i><span>Idiomas</span></a>
</li>
@endcan
@canany(['ver_categorias','crear_categorias','editar_categorias','eliminar_categorias'])
<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>
@endcan
<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Mis reservas</span></a>
</li>
<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Mis prestamos</span></a>
</li>
<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Mis sanciones</span></a>
</li>
{{--Bloquear segun roles y perfiles
    <li class="{{ Request::is('categoriasHasLibros*') ? 'active' : '' }}">
    <a href="{{ route('categoriasHasLibros.index') }}"><i class="fa fa-edit"></i><span>Categorias Has Libros</span></a>
</li>--}}
{{--<li class="{{ Request::is('autoresHasLibros*') ? 'active' : '' }}">
    <a href="{{ route('autoresHasLibros.index') }}"><i class="fa fa-edit"></i><span>Autores Has Libros</span></a>
</li>--}}
{{--
    @canany(['view_books','delete_books','create_books','edit_books'])
<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{{ route('books.index') }}"><i class="fa fa-edit"></i><span>Catálogo</span></a>
</li>
@endcan
--}}

{{-- <li class="{{ Request::is('reservas*') ? 'active' : '' }}">
    <a href="{{ route('reservas.index') }}"><i class="fa fa-edit"></i><span>Reservas</span></a>
</li> --}}

<li class="{{ Request::is('prestamos*') ? 'active' : '' }}">
    <a href="{{ route('prestamos.index') }}"><i class="fa fa-edit"></i><span>Prestamos</span></a>
</li>

<li class="{{ Request::is('sanciones*') ? 'active' : '' }}">
    <a href="{{ route('sanciones.index') }}"><i class="fa fa-edit"></i><span>Sanciones</span></a>
</li>

