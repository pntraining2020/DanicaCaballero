<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'First_Name',
        'Last_Name',
        'Email'
    ];

    public function time()
    {
        return $this->hasMany("App\Models\Time");
    }

}
