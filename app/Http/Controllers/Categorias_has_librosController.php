<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategorias_has_librosRequest;
use App\Http\Requests\UpdateCategorias_has_librosRequest;
use App\Repositories\Categorias_has_librosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Categorias_has_librosController extends AppBaseController
{
    /** @var  Categorias_has_librosRepository */
    private $categoriasHasLibrosRepository;

    public function __construct(Categorias_has_librosRepository $categoriasHasLibrosRepo)
    {
        $this->categoriasHasLibrosRepository = $categoriasHasLibrosRepo;
    }

    /**
     * Display a listing of the Categorias_has_libros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoriasHasLibros = $this->categoriasHasLibrosRepository->all();

        return view('categorias_has_libros.index')
            ->with('categoriasHasLibros', $categoriasHasLibros);
    }

    /**
     * Show the form for creating a new Categorias_has_libros.
     *
     * @return Response
     */
    public function create()
    {
        return view('categorias_has_libros.create');
    }

    /**
     * Store a newly created Categorias_has_libros in storage.
     *
     * @param CreateCategorias_has_librosRequest $request
     *
     * @return Response
     */
    public function store(CreateCategorias_has_librosRequest $request)
    {
        $input = $request->all();

        $categoriasHasLibros = $this->categoriasHasLibrosRepository->create($input);

        Flash::success('Categorias Has Libros saved successfully.');

        return redirect(route('categoriasHasLibros.index'));
    }

    /**
     * Display the specified Categorias_has_libros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriasHasLibros = $this->categoriasHasLibrosRepository->find($id);

        if (empty($categoriasHasLibros)) {
            Flash::error('Categorias Has Libros not found');

            return redirect(route('categoriasHasLibros.index'));
        }

        return view('categorias_has_libros.show')->with('categoriasHasLibros', $categoriasHasLibros);
    }

    /**
     * Show the form for editing the specified Categorias_has_libros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriasHasLibros = $this->categoriasHasLibrosRepository->find($id);

        if (empty($categoriasHasLibros)) {
            Flash::error('Categorias Has Libros not found');

            return redirect(route('categoriasHasLibros.index'));
        }

        return view('categorias_has_libros.edit')->with('categoriasHasLibros', $categoriasHasLibros);
    }

    /**
     * Update the specified Categorias_has_libros in storage.
     *
     * @param int $id
     * @param UpdateCategorias_has_librosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategorias_has_librosRequest $request)
    {
        $categoriasHasLibros = $this->categoriasHasLibrosRepository->find($id);

        if (empty($categoriasHasLibros)) {
            Flash::error('Categorias Has Libros not found');

            return redirect(route('categoriasHasLibros.index'));
        }

        $categoriasHasLibros = $this->categoriasHasLibrosRepository->update($request->all(), $id);

        Flash::success('Categorias Has Libros updated successfully.');

        return redirect(route('categoriasHasLibros.index'));
    }

    /**
     * Remove the specified Categorias_has_libros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriasHasLibros = $this->categoriasHasLibrosRepository->find($id);

        if (empty($categoriasHasLibros)) {
            Flash::error('Categorias Has Libros not found');

            return redirect(route('categoriasHasLibros.index'));
        }

        $this->categoriasHasLibrosRepository->delete($id);

        Flash::success('Categorias Has Libros deleted successfully.');

        return redirect(route('categoriasHasLibros.index'));
    }
}
