<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAutores_has_librosRequest;
use App\Http\Requests\UpdateAutores_has_librosRequest;
use App\Repositories\Autores_has_librosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Autores_has_librosController extends AppBaseController
{
    /** @var  Autores_has_librosRepository */
    private $autoresHasLibrosRepository;

    public function __construct(Autores_has_librosRepository $autoresHasLibrosRepo)
    {
        $this->autoresHasLibrosRepository = $autoresHasLibrosRepo;
    }

    /**
     * Display a listing of the Autores_has_libros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $autoresHasLibros = $this->autoresHasLibrosRepository->all();

        return view('autores_has_libros.index')
            ->with('autoresHasLibros', $autoresHasLibros);
    }

    /**
     * Show the form for creating a new Autores_has_libros.
     *
     * @return Response
     */
    public function create()
    {
        return view('autores_has_libros.create');
    }

    /**
     * Store a newly created Autores_has_libros in storage.
     *
     * @param CreateAutores_has_librosRequest $request
     *
     * @return Response
     */
    public function store(CreateAutores_has_librosRequest $request)
    {
        $input = $request->all();

        $autoresHasLibros = $this->autoresHasLibrosRepository->create($input);

        Flash::success('Autores Has Libros saved successfully.');

        return redirect(route('autoresHasLibros.index'));
    }

    /**
     * Display the specified Autores_has_libros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autoresHasLibros = $this->autoresHasLibrosRepository->find($id);

        if (empty($autoresHasLibros)) {
            Flash::error('Autores Has Libros not found');

            return redirect(route('autoresHasLibros.index'));
        }

        return view('autores_has_libros.show')->with('autoresHasLibros', $autoresHasLibros);
    }

    /**
     * Show the form for editing the specified Autores_has_libros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autoresHasLibros = $this->autoresHasLibrosRepository->find($id);

        if (empty($autoresHasLibros)) {
            Flash::error('Autores Has Libros not found');

            return redirect(route('autoresHasLibros.index'));
        }

        return view('autores_has_libros.edit')->with('autoresHasLibros', $autoresHasLibros);
    }

    /**
     * Update the specified Autores_has_libros in storage.
     *
     * @param int $id
     * @param UpdateAutores_has_librosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAutores_has_librosRequest $request)
    {
        $autoresHasLibros = $this->autoresHasLibrosRepository->find($id);

        if (empty($autoresHasLibros)) {
            Flash::error('Autores Has Libros not found');

            return redirect(route('autoresHasLibros.index'));
        }

        $autoresHasLibros = $this->autoresHasLibrosRepository->update($request->all(), $id);

        Flash::success('Autores Has Libros updated successfully.');

        return redirect(route('autoresHasLibros.index'));
    }

    /**
     * Remove the specified Autores_has_libros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $autoresHasLibros = $this->autoresHasLibrosRepository->find($id);

        if (empty($autoresHasLibros)) {
            Flash::error('Autores Has Libros not found');

            return redirect(route('autoresHasLibros.index'));
        }

        $this->autoresHasLibrosRepository->delete($id);

        Flash::success('Autores Has Libros deleted successfully.');

        return redirect(route('autoresHasLibros.index'));
    }
}
