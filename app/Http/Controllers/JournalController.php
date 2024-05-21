<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Response;
use App\Services\JournalService;
use Illuminate\Contracts\View\View;
use App\Http\Requests\JournalRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Repositories\JournalRepository;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateJournalRequest;
use Illuminate\Routing\RoutingServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class JournalController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('accounting.journal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param JournalRequest $request
     *
     * @return RedirectResponse
     */
    public function store(JournalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Journal $journal
     *
     * @return Response
     */
    public function show(Journal $journal)
    {
        $data = [
            'record' => Journal::with('project', 'details')->whereId($journal->id)->first(),
        ];

        return view('accounting.journal.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Journal $journal
     *
     * @return Application|Factory|View
     */
    public function edit(Journal $journal)
    {

        $data = [
            'record' => Journal::with('project', 'details')->whereId($journal->id)->first(),
        ];

        return view('accounting.journal.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateJournalRequest $request
     * @param Journal  $journal
     *
     * @return RedirectResponse
     */
    public function update(JournalRequest $request, Journal $journal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Journal  $journal
     *
     * @return bool|null
     */
    public function destroy(Journal $journal)
    {
        return $journal->delete();
    }
}
