<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibrosRequest;
use App\Http\Requests\UpdateLibrosRequest;
use App\Repositories\LibrosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\libros;

class LibrosController extends AppBaseController
{
    /** @var  LibrosRepository */
    private $librosRepository;

    public function __construct(LibrosRepository $librosRepo)
    {
        $this->librosRepository = $librosRepo;
    }

    /**
     * Display a listing of the Libros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $titulo = $request->get('titulo');
                
        $libros = libros::orderBy('idlibros', 'DESC')
            ->titulo($titulo)
            ->paginate(8);

        return view('libros.index', compact('libros'));

        // $libros = libros::query()
        //     ->when(request('search'), function ($query, $search){
        //         $query->where('titulo', "%{$search}%");
        //     })
        //     ->paginate(8);

        //     //dd($libros);
 
        // return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new Libros.
     *
     * @return Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created Libros in storage.
     *
     * @param CreateLibrosRequest $request
     *
     * @return Response
     */
    public function store(CreateLibrosRequest $request)
    {
        $input = $request->all();
        $libros = $this->librosRepository->create($input);

        Flash::success('Libro guardado correctamente.');
        return redirect(route('libros.index'));
    }

    /**
     * Display the specified Libros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        return view('libros.show')->with('libros', $libros);
    }

    /**
     * Show the form for editing the specified Libros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        return view('libros.edit')->with('libros', $libros);
    }

    /**
     * Update the specified Libros in storage.
     *
     * @param int $id
     * @param UpdateLibrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLibrosRequest $request)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        $libros = $this->librosRepository->update($request->all(), $id);

        Flash::success('Libros updated successfully.');

        return redirect(route('libros.index'));
    }

    /**
     * Remove the specified Libros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $libros = $this->librosRepository->find($id);

        if (empty($libros)) {
            Flash::error('Libros not found');

            return redirect(route('libros.index'));
        }

        $this->librosRepository->delete($id);

        Flash::success('Libros deleted successfully.');

        return redirect(route('libros.index'));
    }
}
