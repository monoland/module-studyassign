<?php

namespace Module\Studyassign\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Module\Studyassign\Models\StudyassignHistory;
use Module\System\Models\User;

class StudyassignHistoryPolicy
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
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function show(User $user, StudyassignHistory $studyassignHistory)
    {
        return $user->hasAnyPermission(
            'show-studyassign-history'
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
            'view-studyassign-history'
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
            'create-studyassign-history'
        );
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, StudyassignHistory $studyassignHistory)
    {
        return $user->hasAnyPermission(
            'update-studyassign-history'
        );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, StudyassignHistory $studyassignHistory)
    {
        return $user->hasAnyPermission(
            'delete-studyassign-history'
        );
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, StudyassignHistory $studyassignHistory)
    {
        return $user->hasAnyPermission(
            'restore-studyassign-history'
        );
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Module\System\Models\User  $user
     * @param  \Module\Studyassign\Models\StudyassignHistory  $studyassignHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function destroy(User $user, StudyassignHistory $studyassignHistory)
    {
        return $user->hasAnyPermission(
            'destroy-studyassign-history'
        );
    }
}
