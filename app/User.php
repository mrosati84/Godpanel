<?php

namespace app;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'users';

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = ['name', 'email', 'password'];

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $hidden = ['password', 'remember_token'];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function activities()
    {
        return $this->hasMany('App\Activity');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function getPermissions()
    {
        $permissions = explode('|', $this->permissions);

        // handle empty permissions array
        if (count($permissions) === 1) {
            if ($permissions[0] === "") {
                return [];
            }
        }

        return $permissions;
    }

    public function addPermission($permission_name)
    {
        $permissions = $this->getPermissions();

        if (in_array($permission_name, $permissions)) {
            return true; // user already have this permission
        }

        array_push($permissions, strtoupper($permission_name));

        $this->permissions = implode('|', $permissions);

        return ($this->save());
    }

    public function removePermission($permission_name)
    {
        $permissions = $this->getPermissions();
        $permission_key = array_search(strtoupper($permission_name), $permissions);

        if ($permission_key !== false) {
            // permission found
            unset($permissions[$permission_key]);

            $this->permissions = implode('|', $permissions);

            return ($this->save());
        }

        return false;
    }

    public function hasPermission($permission_name)
    {
        $permissions = $this->getPermissions();
        $permission_key = array_search(strtoupper($permission_name), $permissions);

        return $permission_key !== false;
    }

}
