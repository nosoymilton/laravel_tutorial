<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateejemplaresRequest;
use App\Http\Requests\UpdateejemplaresRequest;
use App\Repositories\ejemplaresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ejemplaresController extends AppBaseController
{
    /** @var  ejemplaresRepository */
    private $ejemplaresRepository;

    public function __construct(ejemplaresRepository $ejemplaresRepo)
    {
        $this->ejemplaresRepository = $ejemplaresRepo;
    }

    /**
     * Display a listing of the ejemplares.
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
     * Show the form for creating a new ejemplares.
     *
     * @return Response
     */
    public function create()
    {
        return view('ejemplares.create');
    }

    /**
     * Store a newly created ejemplares in storage.
     *
     * @param CreateejemplaresRequest $request
     *
     * @return Response
     */
    public function store(CreateejemplaresRequest $request)
    {
        $input = $request->all();

        $ejemplares = $this->ejemplaresRepository->create($input);

        Flash::success('Ejemplares saved successfully.');

        return redirect(route('ejemplares.index'));
    }

    /**
     * Display the specified ejemplares.
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
     * Show the form for editing the specified ejemplares.
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
     * Update the specified ejemplares in storage.
     *
     * @param int $id
     * @param UpdateejemplaresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateejemplaresRequest $request)
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
     * Remove the specified ejemplares from storage.
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
