<?php

namespace Module\Studyassign\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Module\Studyassign\Models\StudyassignSubmission;

class SubmissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return StudyassignSubmission::pageResourceMap($request, $this);
    }
}
