<?php

namespace Module\Studyassign\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Module\Studyassign\Models\StudyassignSubmission;

class SubmissionShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            /**
             * link available on current page
             */
            'record' => StudyassignSubmission::pageShowResourceMap($request, $this),

            /**
             * link available on current page
             */
            'features' => StudyassignSubmission::pageShowFeatures($request, $this),

            /**
             * link available on current page
             */
            'links' => StudyassignSubmission::pageLinks($request),
            
            /**
             * setup combos on current page
             */
            'setups' => [
                'combos' => StudyassignSubmission::pageCombos($request, $this)
            ],
        ];
    }
}
