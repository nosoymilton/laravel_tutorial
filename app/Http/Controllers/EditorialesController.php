<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEditorialesRequest;
use App\Http\Requests\UpdateEditorialesRequest;
use App\Repositories\EditorialesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EditorialesController extends AppBaseController
{
    /** @var  EditorialesRepository */
    private $editorialesRepository;

    public function __construct(EditorialesRepository $editorialesRepo)
    {
        $this->editorialesRepository = $editorialesRepo;
    }

    /**
     * Display a listing of the Editoriales.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $editoriales = $this->editorialesRepository->all();

        return view('editoriales.index')
            ->with('editoriales', $editoriales);
    }

    /**
     * Show the form for creating a new Editoriales.
     *
     * @return Response
     */
    public function create()
    {
        return view('editoriales.create');
    }

    /**
     * Store a newly created Editoriales in storage.
     *
     * @param CreateEditorialesRequest $request
     *
     * @return Response
     */
    public function store(CreateEditorialesRequest $request)
    {
        $input = $request->all();

        $editoriales = $this->editorialesRepository->create($input);

        Flash::success('Editoriales saved successfully.');

        return redirect(route('editoriales.index'));
    }

    /**
     * Display the specified Editoriales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $editoriales = $this->editorialesRepository->find($id);

        if (empty($editoriales)) {
            Flash::error('Editoriales not found');

            return redirect(route('editoriales.index'));
        }

        return view('editoriales.show')->with('editoriales', $editoriales);
    }

    /**
     * Show the form for editing the specified Editoriales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $editoriales = $this->editorialesRepository->find($id);

        if (empty($editoriales)) {
            Flash::error('Editoriales not found');

            return redirect(route('editoriales.index'));
        }

        return view('editoriales.edit')->with('editoriales', $editoriales);
    }

    /**
     * Update the specified Editoriales in storage.
     *
     * @param int $id
     * @param UpdateEditorialesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEditorialesRequest $request)
    {
        $editoriales = $this->editorialesRepository->find($id);

        if (empty($editoriales)) {
            Flash::error('Editoriales not found');

            return redirect(route('editoriales.index'));
        }

        $editoriales = $this->editorialesRepository->update($request->all(), $id);
        
        Flash::success('Editoriales updated successfully.');

        return redirect(route('editoriales.index'));
    }

    /**
     * Remove the specified Editoriales from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $editoriales = $this->editorialesRepository->find($id);

        if (empty($editoriales)) {
            Flash::error('Editoriales not found');

            return redirect(route('editoriales.index'));
        }

        $this->editorialesRepository->delete($id);

        Flash::success('Editoriales deleted successfully.');

        return redirect(route('editoriales.index'));
    }
}
