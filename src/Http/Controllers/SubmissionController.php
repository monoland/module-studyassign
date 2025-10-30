<?php

namespace Module\Studyassign\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Module\Studyassign\Http\Resources\SubmissionCollection;
use Module\Studyassign\Http\Resources\SubmissionShowResource;
use Module\Studyassign\Models\StudyassignSubmission;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view', StudyassignSubmission::class);

        return new SubmissionCollection(
            StudyassignSubmission::applyMode($request->mode)
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
        $this->authorize('create', StudyassignSubmission::class);

        $this->validate($request, []);

        return StudyassignSubmission::storeRecord($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(StudyassignSubmission $studyassignSubmission)
    {
        $this->authorize('show', $studyassignSubmission);

        return new SubmissionShowResource($studyassignSubmission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudyassignSubmission $studyassignSubmission)
    {
        $this->authorize('update', $studyassignSubmission);

        $this->validate($request, []);

        return StudyassignSubmission::updateRecord($request, $studyassignSubmission);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyassignSubmission $studyassignSubmission)
    {
        $this->authorize('delete', $studyassignSubmission);

        return StudyassignSubmission::deleteRecord($studyassignSubmission);
    }

    /**
     * Restore the specified resource from soft-delete.
     *
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Http\Response
     */
    public function restore(StudyassignSubmission $studyassignSubmission)
    {
        $this->authorize('restore', $studyassignSubmission);

        return StudyassignSubmission::restoreRecord($studyassignSubmission);
    }

    /**
     * Force Delete the specified resource from soft-delete.
     *
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Http\Response
     */
    public function forceDelete(StudyassignSubmission $studyassignSubmission)
    {
        $this->authorize('destroy', $studyassignSubmission);

        return StudyassignSubmission::destroyRecord($studyassignSubmission);
    }
}
