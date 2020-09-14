<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelibrosRequest;
use App\Http\Requests\UpdatelibrosRequest;
use App\Repositories\librosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class librosController extends AppBaseController
{
    /** @var  librosRepository */
    private $librosRepository;

    public function __construct(librosRepository $librosRepo)
    {
        $this->librosRepository = $librosRepo;
    }

    /**
     * Display a listing of the libros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $libros = $this->librosRepository->all();

        return view('libros.index')
            ->with('libros', $libros);
    }

    /**
     * Show the form for creating a new libros.
     *
     * @return Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created libros in storage.
     *
     * @param CreatelibrosRequest $request
     *
     * @return Response
     */
    public function store(CreatelibrosRequest $request)
    {
        $input = $request->all();

        $libros = $this->librosRepository->create($input);

        Flash::success('Libros saved successfully.');

        return redirect(route('libros.index'));
    }

    /**
     * Display the specified libros.
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
     * Show the form for editing the specified libros.
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
     * Update the specified libros in storage.
     *
     * @param int $id
     * @param UpdatelibrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelibrosRequest $request)
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
     * Remove the specified libros from storage.
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
