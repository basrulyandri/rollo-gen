<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email','username','password','activated','role_id','first_name','last_name','photo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return Role Object Relationship
     */
    public function role(){
        return $this->belongsTo('\App\Role');
    }

    /**
     * @param  boolean
     * @return user email
     */
    public function getNameOrEmail($fullname = false)
    {
        if($this->first_name){
            if($fullname == true){
                return $this->first_name.' '.$this->last_name;
            }else {
                return $this->first_name;
            }
        }

        return $this->email;
    }

    /**
     * @param  string $routeName
     * @return boolean
     */
    public function canAccess($routeName)
    {
        $role = \Auth::user()->role;
        $permissions = [];
        foreach($role->permissions as $perm){
            array_push($permissions,$perm->name_permission);
        }
        // if (\Auth::user()->role->name == 'Superadmin') {
        //     return true;
        // }

        if(!in_array($routeName,$permissions) AND \Auth::user()->role->name !== 'Superadmin'){
            return false;
        }

        return true;
    }   

    
    public function isAdmin()
    {
        if(in_array($this->role->name,['Superadmin','Administrator'])){
            return true;
        }

        return false;
    }

    public function getAvatarUrl()
    {
        if($this->photo){
            return url('/uploads/user-photos').'/'.$this->photo;
        }

        return url('assets/backend/img').'/default.jpg';
    }

    

}
