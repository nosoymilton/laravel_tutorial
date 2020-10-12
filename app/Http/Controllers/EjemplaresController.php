<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEjemplaresRequest;
use App\Http\Requests\UpdateEjemplaresRequest;
use App\Repositories\EjemplaresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EjemplaresController extends AppBaseController
{
    /** @var  EjemplaresRepository */
    private $ejemplaresRepository;

    public function __construct(EjemplaresRepository $ejemplaresRepo)
    {
        $this->ejemplaresRepository = $ejemplaresRepo;
    }

    /**
     * Display a listing of the Ejemplares.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ejemplares = $this->ejemplaresRepository->all();

        return view('ejemplares.index')
            ->with('ejemplares', $ejemplares);
    }

    /**
     * Show the form for creating a new Ejemplares.
     *
     * @return Response
     */
    public function create()
    {
        return view('ejemplares.create');
    }

    /**
     * Store a newly created Ejemplares in storage.
     *
     * @param CreateEjemplaresRequest $request
     *
     * @return Response
     */
    public function store(CreateEjemplaresRequest $request)
    {
        $input = $request->all();

        $ejemplares = $this->ejemplaresRepository->create($input);

        Flash::success('Ejemplares saved successfully.');

        return redirect(route('ejemplares.index'));
    }

    /**
     * Display the specified Ejemplares.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ejemplares = $this->ejemplaresRepository->find($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares not found');

            return redirect(route('ejemplares.index'));
        }

        return view('ejemplares.show')->with('ejemplares', $ejemplares);
    }

    /**
     * Show the form for editing the specified Ejemplares.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ejemplares = $this->ejemplaresRepository->find($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares not found');

            return redirect(route('ejemplares.index'));
        }

        return view('ejemplares.edit')->with('ejemplares', $ejemplares);
    }

    /**
     * Update the specified Ejemplares in storage.
     *
     * @param int $id
     * @param UpdateEjemplaresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEjemplaresRequest $request)
    {
        $ejemplares = $this->ejemplaresRepository->find($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares not found');

            return redirect(route('ejemplares.index'));
        }

        $ejemplares = $this->ejemplaresRepository->update($request->all(), $id);

        Flash::success('Ejemplares updated successfully.');

        return redirect(route('ejemplares.index'));
    }

    /**
     * Remove the specified Ejemplares from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ejemplares = $this->ejemplaresRepository->find($id);

        if (empty($ejemplares)) {
            Flash::error('Ejemplares not found');

            return redirect(route('ejemplares.index'));
        }

        $this->ejemplaresRepository->delete($id);

        Flash::success('Ejemplares deleted successfully.');

        return redirect(route('ejemplares.index'));
    }
}
