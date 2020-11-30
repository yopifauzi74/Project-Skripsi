<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //
    public function user()
    {
        return $this->HasMany(User::class);
        //untuk mengambil intents relations
    }
}
