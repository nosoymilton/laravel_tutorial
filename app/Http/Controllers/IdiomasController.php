<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIdiomasRequest;
use App\Http\Requests\UpdateIdiomasRequest;
use App\Repositories\IdiomasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class IdiomasController extends AppBaseController
{
    /** @var  IdiomasRepository */
    private $idiomasRepository;

    public function __construct(IdiomasRepository $idiomasRepo)
    {
        $this->idiomasRepository = $idiomasRepo;
    }

    /**
     * Display a listing of the Idiomas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $idiomas = $this->idiomasRepository->all();

        return view('idiomas.index')
            ->with('idiomas', $idiomas);
    }

    /**
     * Show the form for creating a new Idiomas.
     *
     * @return Response
     */
    public function create()
    {
        return view('idiomas.create');
    }

    /**
     * Store a newly created Idiomas in storage.
     *
     * @param CreateIdiomasRequest $request
     *
     * @return Response
     */
    public function store(CreateIdiomasRequest $request)
    {
        $input = $request->all();

        $idiomas = $this->idiomasRepository->create($input);

        Flash::success('Idiomas saved successfully.');

        return redirect(route('idiomas.index'));
    }

    /**
     * Display the specified Idiomas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $idiomas = $this->idiomasRepository->find($id);

        if (empty($idiomas)) {
            Flash::error('Idiomas not found');

            return redirect(route('idiomas.index'));
        }

        return view('idiomas.show')->with('idiomas', $idiomas);
    }

    /**
     * Show the form for editing the specified Idiomas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $idiomas = $this->idiomasRepository->find($id);

        if (empty($idiomas)) {
            Flash::error('Idiomas not found');

            return redirect(route('idiomas.index'));
        }

        return view('idiomas.edit')->with('idiomas', $idiomas);
    }

    /**
     * Update the specified Idiomas in storage.
     *
     * @param int $id
     * @param UpdateIdiomasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIdiomasRequest $request)
    {
        $idiomas = $this->idiomasRepository->find($id);

        if (empty($idiomas)) {
            Flash::error('Idiomas not found');

            return redirect(route('idiomas.index'));
        }

        $idiomas = $this->idiomasRepository->update($request->all(), $id);

        Flash::success('Idiomas updated successfully.');

        return redirect(route('idiomas.index'));
    }

    /**
     * Remove the specified Idiomas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $idiomas = $this->idiomasRepository->find($id);

        if (empty($idiomas)) {
            Flash::error('Idiomas not found');

            return redirect(route('idiomas.index'));
        }

        $this->idiomasRepository->delete($id);

        Flash::success('Idiomas deleted successfully.');

        return redirect(route('idiomas.index'));
    }
}
