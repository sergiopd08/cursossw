<?php

namespace App\Policies;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Access\Response;

class CursoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return mixed
     */
    public function view(User $user, Curso $curso)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return mixed
     */
    public function update(User $user, Curso $curso)
    {
        if ( empty( DB::select('select curso_id from creador_curso where curso_id = ? and creador_id = ?', [$curso->id, $user->id]) ) ) {
            return false ? : Response::deny('Este curso no ha sido creado por ti.');
        }

        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return mixed
     */
    public function delete(User $user, Curso $curso)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return mixed
     */
    public function restore(User $user, Curso $curso)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return mixed
     */
    public function forceDelete(User $user, Curso $curso)
    {
        //
    }
}
