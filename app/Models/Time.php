<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
        'employee_id',
        'started_at',
        'stop_at',
        'break_start',
        'break_end',
        'time_worked',
        'break_used'
      ];

      public function employee()
      {
        return $this->belongsTo('App\Models\Employees');
      }

      public function scopeRunning($query)
        {
            return $query->whereNull('stopped_at');
        }
}
