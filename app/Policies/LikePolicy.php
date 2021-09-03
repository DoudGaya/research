<?php

namespace App\Policies;

use App\Models\Like;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LikePolicy
{
    use HandlesAuthorization;

 
    // public function like(User $user, Like $like) {
    //     return $user->id === $like->user_id;
    // }
}
