<?php

namespace App\Policies;

use App\Models\SalaryStep;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SalaryStepPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, SalaryStep $salaryStep)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, SalaryStep $salaryStep)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, SalaryStep $salaryStep)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, SalaryStep $salaryStep)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SalaryStep  $salaryStep
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, SalaryStep $salaryStep)
    {
        //
    }
}
