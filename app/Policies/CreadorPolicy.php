<?php

namespace App\Policies;

use App\Models\Creador;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CreadorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user , Creador $creador)
    {
      return ( $user->id === $creador->id ? Response::allow() :
          Response::deny('No tienes permiso de ver la información de este usuario.') );
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Creador  $creador
     * @return mixed
     */
    public function view(User $user, Creador $creador)
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
     * @param  \App\Models\Creador  $creador
     * @return mixed
     */
    public function update(User $user, Creador $creador)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Creador  $creador
     * @return mixed
     */
    public function delete(User $user, Creador $creador)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Creador  $creador
     * @return mixed
     */
    public function restore(User $user, Creador $creador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Creador  $creador
     * @return mixed
     */
    public function forceDelete(User $user, Creador $creador)
    {
        //
    }
}
