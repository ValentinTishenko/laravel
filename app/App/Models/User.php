<?php

namespace App\App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    //
}
