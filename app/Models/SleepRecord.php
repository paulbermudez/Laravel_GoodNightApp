<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SleepRecord extends Model
{
    /** @use HasFactory<\Database\Factories\SleepRecordFactory> */
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
