<?php

namespace Module\Studyassign\Http\Resources;

use App\Models\PageInfo;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Module\Studyassign\Models\StudyassignSubmission;

class SubmissionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return SubmissionResource::collection($this->collection);
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function with($request): array
    {
        if (!$request->has('initialized')) {
            return [];
        }

        return [
            'setups' => [
                /** the page combo */
                'combos' => StudyassignSubmission::pageCombos($request),

                /** the page data mode */
                /** default | nested | single | trashed */
                'mode' => $request->mode,

                /** the page enable fitur */
                'features' => StudyassignSubmission::pageFeatures($request),

                /** the page data filter */
                'filters' => StudyassignSubmission::pageFilters(),

                /** the table header */
                'headers' => StudyassignSubmission::pageHeaders($request),

                /** the page icon */
                'icon' => PageInfo::getIcon('studyassign-submission'),

                /** the record key */
                'key' => 'id',

                /** the page default */
                'record_base' => StudyassignSubmission::pageRecordMap($request),

                /** the page title */
                'title' => PageInfo::getTitle('studyassign-submission'),
            ]
        ];
    }
}
