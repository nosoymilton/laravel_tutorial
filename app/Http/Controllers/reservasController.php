<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereservasRequest;
use App\Http\Requests\UpdatereservasRequest;
use App\Repositories\reservasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class reservasController extends AppBaseController
{
    /** @var  reservasRepository */
    private $reservasRepository;

    public function __construct(reservasRepository $reservasRepo)
    {
        $this->reservasRepository = $reservasRepo;
    }

    /**
     * Display a listing of the reservas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $reservas = $this->reservasRepository->all();

        return view('reservas.index')
            ->with('reservas', $reservas);
    }

    /**
     * Show the form for creating a new reservas.
     *
     * @return Response
     */
    public function create()
    {
        return view('reservas.create');
    }

    /**
     * Store a newly created reservas in storage.
     *
     * @param CreatereservasRequest $request
     *
     * @return Response
     */
    public function store(CreatereservasRequest $request)
    {
        $input = $request->all();

        $reservas = $this->reservasRepository->create($input);

        Flash::success('Reservas saved successfully.');

        return redirect(route('reservas.index'));
    }

    /**
     * Display the specified reservas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reservas = $this->reservasRepository->find($id);

        if (empty($reservas)) {
            Flash::error('Reservas not found');

            return redirect(route('reservas.index'));
        }

        return view('reservas.show')->with('reservas', $reservas);
    }

    /**
     * Show the form for editing the specified reservas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reservas = $this->reservasRepository->find($id);

        if (empty($reservas)) {
            Flash::error('Reservas not found');

            return redirect(route('reservas.index'));
        }

        return view('reservas.edit')->with('reservas', $reservas);
    }

    /**
     * Update the specified reservas in storage.
     *
     * @param int $id
     * @param UpdatereservasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatereservasRequest $request)
    {
        $reservas = $this->reservasRepository->find($id);

        if (empty($reservas)) {
            Flash::error('Reservas not found');

            return redirect(route('reservas.index'));
        }

        $reservas = $this->reservasRepository->update($request->all(), $id);

        Flash::success('Reservas updated successfully.');

        return redirect(route('reservas.index'));
    }

    /**
     * Remove the specified reservas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reservas = $this->reservasRepository->find($id);

        if (empty($reservas)) {
            Flash::error('Reservas not found');

            return redirect(route('reservas.index'));
        }

        $this->reservasRepository->delete($id);

        Flash::success('Reservas deleted successfully.');

        return redirect(route('reservas.index'));
    }
}
