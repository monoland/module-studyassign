<?php

namespace Module\Studyassign\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Module\Studyassign\Models\StudyassignHistory;

class HistoryShowResource extends JsonResource
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
            'record' => StudyassignHistory::pageShowResourceMap($request, $this),

            /**
             * link available on current page
             */
            'features' => StudyassignHistory::pageShowFeatures($request, $this),

            /**
             * link available on current page
             */
            'links' => StudyassignHistory::pageLinks($request),
            
            /**
             * setup combos on current page
             */
            'setups' => [
                'combos' => StudyassignHistory::pageCombos($request, $this)
            ],
        ];
    }
}
