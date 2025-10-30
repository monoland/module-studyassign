<?php

namespace Module\Studyassign\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Module\Studyassign\Models\StudyassignSubmission;
use Module\System\Models\User;

class StudyassignSubmissionPolicy
{
    use HandlesAuthorization;

    /**
     * Perform pre-authorization checks.
     *
     * @param  \Module\System\Models\User  $user
     * @return void|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->name === 'superadmin') {
            return true;
        }
    }

    /**
     * Determine whether the user can show the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, StudyassignSubmission $studyassignSubmission)
    {
        return $user->hasAnyPermission(
            'show-studysign-submission'
        );
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Module\System\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->hasAnyPermission(
            'view-studysign-submission'
        );
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Module\System\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAnyPermission(
            'create-studysign-submission'
        );
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, StudyassignSubmission $studyassignSubmission)
    {
        return $user->hasAnyPermission(
            'update-studysign-submission'
        );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, StudyassignSubmission $studyassignSubmission)
    {
        return $user->hasAnyPermission(
            'delete-studysign-submission'
        );
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, StudyassignSubmission $studyassignSubmission)
    {
        return $user->hasAnyPermission(
            'restore-studysign-submission'
        );
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignSubmission  $studyassignSubmission
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function destroy(User $user, StudyassignSubmission $studyassignSubmission)
    {
        return $user->hasAnyPermission(
            'destroy-studysign-submission'
        );
    }
}
