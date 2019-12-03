<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class NormalUser extends Model {

    public $table = "normal_user";
    public $guarded = [];

    public function getUser() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
