<?php

namespace Module\Studyassign\Models;

use App\Traits\HasMeta;
use App\Traits\Filterable;
use App\Traits\Searchable;
use App\Traits\HasFeatures;
use Illuminate\Http\Request;
use App\Traits\HasCollectionSetup;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Module\Reference\Models\ReferenceSection;
use Module\Governance\Models\GovernanceWorkunit;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Module\Reference\Models\ReferenceEducationLevel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyassignSubmission extends Model
{
    use Filterable;
    use HasMeta;
    use HasFeatures;
    use HasCollectionSetup;
    use Searchable;
    use SoftDeletes;

    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'platform';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'studyassign_submissions';

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $roles = ['studysign-submission'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'meta' => 'array',
        'recommend_permission_date' => 'date:Y-m-d'
    ];

    /**
     * The default key for the order.
     *
     * @var string
     */
    protected $defaultOrder = 'name';

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return array
     */
    public static function pageCombos(Request $request): array
    {
        return [
            'edulevels' => ReferenceEducationLevel::forCombo()
        ];
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return array
     */
    public static function pageHeaders(Request $request): array
    {
        return [
            ['text' => 'NIP', 'value' => 'biodata_id'],
            ['text' => 'Name', 'value' => 'name'],
            ['text' => 'Tingkat', 'value' => 'target_edulevel_name'],
            ['text' => 'Perguruan Tinggi', 'value' => 'college_name'],
            ['text' => 'Prodi', 'value' => 'study_program'],
            ['text' => 'Status', 'value' => 'status', 'class' => 'field-datetime'],
        ];
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return array
     */
    public static function pageResourceMap(Request $request, $model): array
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'biodata_id' => $model->biodata_id,
            'target_edulevel_name' => $model->edulevel?->name,
            'college_name' => $model->college_name,
            'study_program' => $model->study_program,
            'status' => $model->recommend_status,
        ];
    }

    /**
     * pageShowResourceMap function
     *
     * @param Request $request
     * @return array
     */
    public static function pageShowResourceMap(Request $request, $model): array
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'biodata_id' => $model->biodata_id,
            'section_id' => $model->section_id,
            'section_name' => $model->section_name,
            'education_level_id' => $model->education_level_id,
            'education_level_name' => $model->education_level_name,
            'positionable_type' => $model->positionable_type,
            'positionable_id' => $model->positionable_id,
            'position_name' => $model->position_name,
            'structural_id' => $model->structural_id,
            'structural_name' => $model->structural_name,
            'workunit_id' => $model->workunit_id,
            'workunit_name' => $model->workunit_name,
            'target_edulevel_id' => $model->target_edulevel_id,
            'target_edulevel_name' => $model->edulevel?->name,
            'college_name' => $model->college_name,
            'study_program' => $model->study_program,
            'status' => $model->recommend_status,
        ];
    }

    public function edulevel(): BelongsTo
    {
        return $this->belongsTo(ReferenceEducationLevel::class, 'education_level_id');
    }

    /**
     * section function
     *
     * @return BelongsTo
     */
    public function section(): BelongsTo
    {
        return $this->belongsTo(ReferenceSection::class, 'section_id');
    }

    /**
     * edulevel function
     *
     * @return BelongsTo
     */
    public function targetEdulevel(): BelongsTo
    {
        return $this->belongsTo(ReferenceEducationLevel::class, 'target_edulevel_id');
    }

    /**
     * workunit function
     *
     * @return BelongsTo
     */
    public function workunit(): BelongsTo
    {
        return $this->belongsTo(GovernanceWorkunit::class, 'workunit_id');
    }

    /**
     * positionable function
     *
     * @return MorphTo
     */
    public function positionable(): MorphTo
    {
        return $this->morphTo('positionable');
    }

    /**
     * The model store method
     *
     * @param Request $request
     * @return void
     */
    public static function storeRecord(Request $request)
    {
        $model = new static();

        DB::connection($model->connection)->beginTransaction();

        try {
            // ...
            $model->save();

            DB::connection($model->connection)->commit();

            // return new StudyassignSubmissionResource($model);
        } catch (\Exception $e) {
            DB::connection($model->connection)->rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * The model update method
     *
     * @param Request $request
     * @param [type] $model
     * @return void
     */
    public static function updateRecord(Request $request, $model)
    {
        DB::connection($model->connection)->beginTransaction();

        try {
            // ...
            $model->save();

            DB::connection($model->connection)->commit();

            // return new StudyassignSubmissionResource($model);
        } catch (\Exception $e) {
            DB::connection($model->connection)->rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * The model delete method
     *
     * @param [type] $model
     * @return void
     */
    public static function deleteRecord($model)
    {
        DB::connection($model->connection)->beginTransaction();

        try {
            $model->delete();

            DB::connection($model->connection)->commit();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::connection($model->connection)->rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * The model restore method
     *
     * @param [type] $model
     * @return void
     */
    public static function restoreRecord($model)
    {
        DB::connection($model->connection)->beginTransaction();

        try {
            $model->restore();

            DB::connection($model->connection)->commit();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::connection($model->connection)->rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * The model destroy method
     *
     * @param [type] $model
     * @return void
     */
    public static function destroyRecord($model)
    {
        DB::connection($model->connection)->beginTransaction();

        try {
            $model->forceDelete();

            DB::connection($model->connection)->commit();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::connection($model->connection)->rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
