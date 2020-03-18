<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFraudsRequest;
use App\Http\Requests\UpdateFraudsRequest;
use App\Mail\ContactMessage;
use App\Repositories\FraudsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Response;

class FraudsController extends AppBaseController
{
    /** @var  FraudsRepository */
    private $fraudsRepository;

    public function __construct(FraudsRepository $fraudsRepo)
    {
        $this->fraudsRepository = $fraudsRepo;
    }

    /**
     * Display a listing of the Frauds.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $frauds = $this->fraudsRepository->all();

        return view('frauds.index')
            ->with('frauds', $frauds);
    }

//    public function Fraud(Request $request)
//    {
//        if ($request->isMethod('post')) {
//            $fields = $request->all();
//            $validator = Validator::make($fields, [
//                'f_name' => 'required|string|max:190',
//                'description' => 'required',
//                'phone1' => 'required|integer|max:10',
//                'phone2' => 'integer|max:10',
//                'card1' => 'integer|max:16'
//            ]);
//            $validator->validate();
//
//            $fields = $request->only('f_name', 'description', 'phone1', 'phone2', 'card1');
//
//            Mail::send(new ContactMessage($fields));
//
//            return redirect()->back()->with('message_sent', true);
//        }
//
//        return view('static.contact', ['page' => 'contact']);
//    }
    /**
     * Show the form for creating a new Frauds.
     *
     * @return Response
     */
    public function create()
    {
        return view('frauds.create');
    }

    /**
     * Store a newly created Frauds in storage.
     *
     * @param CreateFraudsRequest $request
     *
     * @return Response
     */
    public function store(CreateFraudsRequest $request)
    {
        $input = $request->all();

        $frauds = $this->fraudsRepository->create($input);

        Flash::success('Frauds saved successfully.');

        return redirect(route('frauds.index'));
    }

    /**
     * Display the specified Frauds.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $frauds = $this->fraudsRepository->find($id);

        if (empty($frauds)) {
            Flash::error('Frauds not found');

            return redirect(route('frauds.index'));
        }

        return view('frauds.show')->with('frauds', $frauds);
    }

    /**
     * Show the form for editing the specified Frauds.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $frauds = $this->fraudsRepository->find($id);

        if (empty($frauds)) {
            Flash::error('Frauds not found');

            return redirect(route('frauds.index'));
        }

        return view('frauds.edit')->with('frauds', $frauds);
    }

    /**
     * Update the specified Frauds in storage.
     *
     * @param int $id
     * @param UpdateFraudsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFraudsRequest $request)
    {
        $frauds = $this->fraudsRepository->find($id);

        if (empty($frauds)) {
            Flash::error('Frauds not found');

            return redirect(route('frauds.index'));
        }

        $frauds = $this->fraudsRepository->update($request->all(), $id);

        Flash::success('Frauds updated successfully.');

        return redirect(route('frauds.index'));
    }

    /**
     * Remove the specified Frauds from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $frauds = $this->fraudsRepository->find($id);

        if (empty($frauds)) {
            Flash::error('Frauds not found');

            return redirect(route('frauds.index'));
        }

        $this->fraudsRepository->delete($id);

        Flash::success('Frauds deleted successfully.');

        return redirect(route('frauds.index'));
    }
}
