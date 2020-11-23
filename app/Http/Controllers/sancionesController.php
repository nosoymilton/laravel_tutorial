<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesancionesRequest;
use App\Http\Requests\UpdatesancionesRequest;
use App\Repositories\sancionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sancionesController extends AppBaseController
{
    /** @var  sancionesRepository */
    private $sancionesRepository;

    public function __construct(sancionesRepository $sancionesRepo)
    {
        $this->sancionesRepository = $sancionesRepo;
    }

    /**
     * Display a listing of the sanciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sanciones = $this->sancionesRepository->all();

        return view('sanciones.index')
            ->with('sanciones', $sanciones);
    }

    /**
     * Show the form for creating a new sanciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('sanciones.create');
    }

    /**
     * Store a newly created sanciones in storage.
     *
     * @param CreatesancionesRequest $request
     *
     * @return Response
     */
    public function store(CreatesancionesRequest $request)
    {
        $input = $request->all();

        $sanciones = $this->sancionesRepository->create($input);

        Flash::success('Sanciones saved successfully.');

        return redirect(route('sanciones.index'));
    }

    /**
     * Display the specified sanciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sanciones = $this->sancionesRepository->find($id);

        if (empty($sanciones)) {
            Flash::error('Sanciones not found');

            return redirect(route('sanciones.index'));
        }

        return view('sanciones.show')->with('sanciones', $sanciones);
    }

    /**
     * Show the form for editing the specified sanciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sanciones = $this->sancionesRepository->find($id);

        if (empty($sanciones)) {
            Flash::error('Sanciones not found');

            return redirect(route('sanciones.index'));
        }

        return view('sanciones.edit')->with('sanciones', $sanciones);
    }

    /**
     * Update the specified sanciones in storage.
     *
     * @param int $id
     * @param UpdatesancionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesancionesRequest $request)
    {
        $sanciones = $this->sancionesRepository->find($id);

        if (empty($sanciones)) {
            Flash::error('Sanciones not found');

            return redirect(route('sanciones.index'));
        }

        $sanciones = $this->sancionesRepository->update($request->all(), $id);

        Flash::success('Sanciones updated successfully.');

        return redirect(route('sanciones.index'));
    }

    /**
     * Remove the specified sanciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sanciones = $this->sancionesRepository->find($id);

        if (empty($sanciones)) {
            Flash::error('Sanciones not found');

            return redirect(route('sanciones.index'));
        }

        $this->sancionesRepository->delete($id);

        Flash::success('Sanciones deleted successfully.');

        return redirect(route('sanciones.index'));
    }
}
