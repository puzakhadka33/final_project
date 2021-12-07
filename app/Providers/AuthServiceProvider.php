<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\UserPart;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();
        if (!app()->runningInConsole()) {
            $user_parts = UserPart::with('permissions')->get();
            //dd($roles);
            foreach ($user_parts as $user_part) {
                foreach ($user_part->permissions as $permission) {
                    $permissionArray[$permission->permission][] = $user_part->id;
                }
            }
             //dd($permissionArray); //return array with permission name as title and role associated with that permission
            foreach ($permissionArray as $permission => $user_parts) {
                //Defines the gate based on the user role
                Gate::define($permission, function ($user) use ($user_parts) {
                    // dd($user->role); //return the authenticated user
                    // return count(array_intersect($user->role->pluck('id')->toArray(), $roles));
                    // dd($user->role->id); //returns authenticated user id

                    
                    foreach($user_parts as $user_part){
                        if ($user->user_part->id == $user_part) {
                            return true;
                        }
                    }

                });
            }
        }
    }
}
