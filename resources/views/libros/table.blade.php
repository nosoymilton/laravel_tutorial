<div class="table-responsive">
    <table class="table" id="libros-table">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Título</th>
                <th>N° páginas</th>
                <th>Año de publicación</th>
                <th>Idioma</th>
                <th>Editorial</th>
                <th>Autor</th>
                <th>Ejemplares</th>
                <th>Categorías</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->isbn }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->numpaginas }}</td>
                <td>{{ $libro->apublicacion}}</td>
                {{-- use App\Models\Idiomas;
                <td>{{ $libro->idioma->nombre }} </td> --}}
                <td>{{ $nombre = (App\Models\Idiomas::find($libro->idiomas_ididiomas))->nombre }}</td>
                <td>{{ $editorial = (App\Models\Editoriales::find($libro->editoriales_ideditoriales))->editorial }}</td>
                <td>
                   
                     @foreach ($libro->autores as $autor)
                        {{ $autor->nombres }}
                         
                     @endforeach
                     {{-- {{ App\Models\Autores::find($libro->autores->nombres) }} --}}
                </td>
                <!--<td>{{ App\Models\Ejemplares::find($libro->ejemplares) }}</td>-->
                <td>
                    {{ $libro->ejemplares->count() }}
                    {{-- @foreach($libro->ejemplares as $ejemplar)
                        {{ $ejemplar->count() }}
                    @endforeach --}}
                </td>
                <td>
                    @foreach ($libro->categorias as $categoria)
                        {{ $categoria->categoria }}
                         
                     @endforeach
                </td>
                <td>
                    {!! Form::open(['route' => ['libros.destroy', $libro->idlibros], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('libros.show', [$libro->idlibros]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('libros.edit', [$libro->idlibros]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás segur@?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @csrf
        @endforeach
        </tbody>
    </table>
</div>