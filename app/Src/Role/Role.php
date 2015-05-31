<?php namespace App\Src\Role;

use App\Core\BaseModel;



class Role extends BaseModel
{
    //

    public $table = "roles";

    /*
     * A role has many users
     * */

    public function users() {
        return $this->belongsToMany('App\Src\User\User','role_user');
    }

}
