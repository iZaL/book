<?php
namespace App\Src\Role;


use App\Core\BaseRepository;
use App\Src\User\User as User;


class RoleRepository extends BaseRepository {

    protected $fillable = ['name'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    /**
     * Construct
     * @param User $model
     */
    public function __construct(User $model, Role $role)
    {
        $this->model = $model;
        $this->role = $role;
    }

}