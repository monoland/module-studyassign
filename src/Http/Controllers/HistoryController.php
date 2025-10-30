<?php

namespace Module\Studyassign\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Module\Studyassign\Models\StudyassignHistory;
use Module\Studyassign\Http\Resources\HistoryCollection;
use Module\Studyassign\Http\Resources\HistoryShowResource;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view', StudyassignHistory::class);

        return new HistoryCollection(
            StudyassignHistory::applyMode($request->mode)
                ->filter($request->filters)
                ->search($request->findBy)
                ->sortBy($request->sortBy, $request->sortDesc)
                ->paginate($request->itemsPerPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', StudyassignHistory::class);

        $this->validate($request, []);

        return StudyassignHistory::storeRecord($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Http\Response
     */
    public function show(StudyassignHistory $studyassignHistory)
    {
        $this->authorize('show', $studyassignHistory);

        return new HistoryShowResource($studyassignHistory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudyassignHistory $studyassignHistory)
    {
        $this->authorize('update', $studyassignHistory);

        $this->validate($request, []);

        return StudyassignHistory::updateRecord($request, $studyassignHistory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyassignHistory $studyassignHistory)
    {
        $this->authorize('delete', $studyassignHistory);

        return StudyassignHistory::deleteRecord($studyassignHistory);
    }

    /**
     * Restore the specified resource from soft-delete.
     *
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Http\Response
     */
    public function restore(StudyassignHistory $studyassignHistory)
    {
        $this->authorize('restore', $studyassignHistory);

        return StudyassignHistory::restoreRecord($studyassignHistory);
    }

    /**
     * Force Delete the specified resource from soft-delete.
     *
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Http\Response
     */
    public function forceDelete(StudyassignHistory $studyassignHistory)
    {
        $this->authorize('destroy', $studyassignHistory);

        return StudyassignHistory::destroyRecord($studyassignHistory);
    }
}
